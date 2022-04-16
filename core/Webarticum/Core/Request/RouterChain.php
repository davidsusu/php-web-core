<?php

namespace Webarticum\Core\Request;


/**
 * Chained router collection
 */
class RouterChain implements Router {
    
    protected $routers = [];
    
    /**
     * @param \Webarticum\Core\Request\Router[]
     */
    public function __construct(array $routers = []) {
        $this->routers = $routers;
    }
    
    /**
     * Tries to handle the given request
     *
     * @param \Webarticum\Core\Request\Request
     * @return\Webarticum\Core\Request\Response
     */
    public function handleRequest(Request $oRequest) {
        // FIXME
        foreach ($this->routers as $oRouter) {
            $oResponse = $oRouter->handleRequest($oRequest);
            if (!is_null($oResponse) && $oResponse->getApplicableStatus() != Response::APPLICABLE_CONTINUE) {
                return $oResponse;
            }
        }
        return (new ResponseBuilder())->setHttpStatus(404)->setApplicableStatus(Response::APPLICABLE_CONTINUE)->build();
    }
    
    /**
     * Prepends a router to begin of the collection
     *
     * @param \Webarticum\Core\Request\Router $oRouter
     */
    public function prepend(Router $oRouter) {
        array_unshift($this->routers, $oRouter);
        return $this;
    }
    
    /**
     * Appends a router to end of the collection
     *
     * @param \Webarticum\Core\Request\Router $oRouter
     */
    public function append(Router $oRouter) {
        $this->routers[] = $oRouter;
        return $this;
    }
    
    /**
     * Prepends multiple routers to begin of the collection
     *
     * @param \Webarticum\Core\Request\Router[] $routers
     * @param boolean $forwardOrder
     */
    public function prependAll(array $routers, $forwardOrder = false) {
        if ($forwardOrder) {
            array_reverse($routers);
        }
        foreach ($routers as $oRouter) {
            $this->prepend($oRouter);
        }
        return $this;
    }
    
    /**
     * Appends multiple routers to end of the collection
     *
     * @param \Webarticum\Core\Request\Router[] $routers
     */
    public function appendAll(array $routers) {
        foreach ($routers as $oRouter) {
            $this->append($oRouter);
        }
        return $this;
    }
    
}
