<?php

namespace Webarticum\Core\Request;


/**
 * Default request implementation
 */
class SimpleRequest implements Request {
    
    protected $method;
    protected $path;
    protected $oHeaders;
    protected $query;
    protected $data;
    
    public function __construct($method, $path, Headers $oHeaders, $query, $data) {
        $this->method = $method;
        $this->path = $path;
        $this->oHeaders = $oHeaders;
        $this->query = $query;
        $this->data = $data;
    }
    
    public function getMethod() {
        return $this->method;
    }
    
    public function getPath() {
        return $this->path;
    }
    
    public function getHeaders() {
        return $this->oHeaders;
    }
    
    public function getQuery() {
        return $this->query;
    }
    
    public function getData() {
        return $this->data;
    }
    
}
