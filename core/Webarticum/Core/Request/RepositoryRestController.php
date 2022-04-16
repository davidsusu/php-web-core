<?php

namespace Webarticum\Core\Request;

use Webarticum\Core\Entity\Repository;
use Webarticum\Core\Entity\Entity;
use Webarticum\Core\Entity\UpdateableEntity;
use Webarticum\Core\Entity\TableRepository;


class RepositoryRestController {
    
    protected $oRepository;
    
    protected $allowedMethods;
    
    protected $labelField;
    
    public function __construct(Repository $oRepository, $settings = null) {
        $this->oRepository = $oRepository;
        $this->allowedMethods = isset($settings["allowedMethods"]) ? array_map("strtoupper", $settings["allowedMethods"]) : null;
        $this->labelField = isset($settings["labelField"]) ? $settings["labelField"] : null;
    }
    
    public function appendTo(RouterChain $oRouterChain, $pathPrefix) {
        $oRouterChain->append(new PathCallbackRouter('OPTIONS', $pathPrefix, $this->proxyHandler('OPTIONS', [$this, 'getOptions']), true));
        $oRouterChain->append(new PathCallbackRouter('GET', $pathPrefix, $this->proxyHandler('GET', [$this, 'getList']), true));
        $oRouterChain->append(new PathCallbackRouter('GET', "{$pathPrefix}/{id}", $this->proxyHandler('GET', [$this, 'get']), true));
        $oRouterChain->append(new PathCallbackRouter('PUT', "{$pathPrefix}/{id}", $this->proxyHandler('PUT', function (Request $oRequest, $id) {
            return $this->update($oRequest, $id, $this->removeAdditionalId($oRequest->getData()));
        }), true));
        $oRouterChain->append(new PathCallbackRouter('POST', "{$pathPrefix}", $this->proxyHandler('POST', function (Request $oRequest) {
            return $this->create($oRequest, $this->removeAdditionalId($oRequest->getData()));
        }), true));
        $oRouterChain->append(new PathCallbackRouter('DELETE', "{$pathPrefix}/{id}", $this->proxyHandler('DELETE', [$this, 'delete']), true));
    }
    
    private function proxyHandler($method, callable $handler) {
        if (!$this->isMethodAllowed($method)) {
            return function () use ($method) {
                return $this->buildErrorResponse($method);
            };
        }
        return $handler;
    }
    
    private function isMethodAllowed($method) {
        $methodUpper = strtoupper($method);
        if ($methodUpper == "OPTIONS") {
            return true;
        }
        if (is_null($this->allowedMethods)) {
            return true;
        }
        return in_array($methodUpper, $this->allowedMethods);
    }
    
    private function buildErrorResponse($method) {
        $message = "Method not allowed: '{$method}'. Allowed methods: ";
        if (!empty($this->allowedMethods)) {
            $message .= implode(", ", $this->allowedMethods);
        }
        return (new ResponseBuilder())->initJson(["message" => $message])->setHttpStatus(405)->build();
    }
    
    public function getOptions(Request $oRequest) {
        return (new ResponseBuilder())->initOptions($this->allowedMethods)->build();
    }
    
    public function get(Request $oRequest, $id) {
        $oEntity = $this->oRepository->get($id);
        if (is_null($oEntity)) {
            return (new ResponseBuilder())->initJson(["error" => "Not found!"])->setHttpStatus(404)->build();
        }
        
        return (new ResponseBuilder())->initJson($this->getEntityData($oEntity))->build();
    }
    
    public function getList(Request $oRequest) {
        $data = [];
        foreach ($this->oRepository->getAll() as $oEntity) {
            $data[] = $this->getEntityData($oEntity);
        }
        $totalCount = $this->oRepository->count();
        $rangeDef = [0, $totalCount - 1];
        return (new ResponseBuilder())->initJson($data)
            ->addHeader("Content-Range: items {$rangeDef[0]}-{$rangeDef[1]}/{$totalCount}")
            ->addHeader("X-Total-Count: {$totalCount}")
            ->build()
        ;
    }
    
    public function update(Request $oRequest, $id, $updates) {
        $oEntity = $this->oRepository->get($id);
        if (!$oEntity instanceof UpdateableEntity) {
            return $this->buildNotUpdateableErrorResponse();
        }
        
        return $this->save($oEntity, $updates);
    }
    
    public function create(Request $oRequest, $initialData) {
        $oEntity = $this->oRepository->create();
        if (!$oEntity instanceof UpdateableEntity) {
            return $this->buildNotUpdateableErrorResponse();
        }
        
        return $this->save($oEntity, $initialData);
    }
    
    protected function save(UpdateableEntity $oEntity, $updates) {
        if (!$oEntity->updateData($updates)->save()) {
            $errorMessage = null;
            if ($this->oRepository instanceof TableRepository) {
                $errorMessage = $this->oRepository->getTable()->getConnection()->getPlatformErrorDescription();
            }
            return $this->buildSaveErrorResponse($errorMessage);
        }
        return (new ResponseBuilder())->initJson($this->getEntityData($oEntity))->build();
    }
    
    public function delete(Request $oRequest, $id) {
        $this->oRepository->delete($id);
        if ($this->oRepository->exists($id)) {
            $errorMessage = null;
            if ($this->oRepository instanceof TableRepository) {
                $errorMessage = $this->oRepository->getTable()->getConnection()->getPlatformErrorDescription();
            }
            return $this->buildSaveErrorResponse($errorMessage);
        }
        
        return $this->buildMinimalSuccessResponse();
    }
    
    protected function getEntityData(Entity $oEntity) {
        return array_merge(["id" => $oEntity->getId()], $oEntity->getData());
    }
    
    protected function decodeField($field) {
        if ($field == "id") {
            $uniqueKey = $this->oRepository->getTable()->getUniqueKey();
            $field = is_array($uniqueKey) ? $uniqueKey[0] : $uniqueKey;
        }
        return $field;
    }
    
    protected function removeAdditionalId($row) {
        $cleanedRow = $row;
        if (array_key_exists("id", $row)) {
            $uniqueKey = $this->oRepository->getTable()->getUniqueKey();
            if ($uniqueKey != "id") {
                unset($cleanedRow["id"]); // XXX
            }
        }
        return $cleanedRow;
    }
    
    protected function buildMinimalSuccessResponse() {
        return (new ResponseBuilder())->initJson(["success" => true])->build();
    }
    
    protected function buildSaveErrorResponse($message = null) {
        return (new ResponseBuilder())->initJson(["success" => false, "error" => "Persistance error", "message" => $message]) // XXX printing low level error message is unsafe
            ->setHttpStatus(500) // XXX
            ->build()
        ;
    }
    
    protected function buildNotUpdateableErrorResponse() {
        return (new ResponseBuilder())->initJson(["success" => false, "error" => "This resource is not updateable"])
            ->setHttpStatus(400)
            ->build()
        ;
    }
    
}
