<?php

namespace Webarticum\Core\Request;


/**
 * Simple router with a user defined callback
 */
class SimpleCallbackRouter implements Router {
    
    protected $callback;
    
    public function __construct(callable $callback) {
        $this->callback = $callback;
    }
    
    public function handleRequest(Request $oRequest) {
        return call_user_func($this->callback);
    }
    
}
