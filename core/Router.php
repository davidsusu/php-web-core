<?php

namespace Webarticum\Core\Request;


/**
 * Interface for request routers
 */
interface Router {
    
    /**
     * Tries to handle the given request
     *
     * @param \Webarticum\Core\Request\Request
     * @return\Webarticum\Core\Request\Response
     */
    public function handleRequest(Request $oRequest);
    
}
