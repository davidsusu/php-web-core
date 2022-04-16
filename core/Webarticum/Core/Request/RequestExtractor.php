<?php

namespace Webarticum\Core\Request;

class RequestExtractor {
    
    public function getCurrentRequest() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $this->getCurrentPath();
        $oHeaders = $this->getCurrentHeaders();
        $query = $_GET;
        $data = $this->getCurrentData($oHeaders);
        return new SimpleRequest($method, $path, $oHeaders, $query, $data);
    }
    
    private function getCurrentPath() {
        // FIXME
        $requestUri = $_SERVER['REQUEST_URI'];
        $questionMarkPosition = strpos($requestUri, '?');
        return $questionMarkPosition === false ? $requestUri : substr($requestUri, 0, $questionMarkPosition);
    }
    
    private function getCurrentHeaders() {
        return new Headers(getallheaders());
    }
    
    private function getCurrentData(Headers $oHeaders) {
        if (!empty($_POST)) {
            return $_POST;
        }
        
        $body = file_get_contents("php://input");
        
        $contentType = strval($oHeaders->get("Content-Type"));
        if (preg_match('@/json$@', $contentType)) {
            return json_decode($body, true);
        } else {
            return $body;
        }
    }
    
}

