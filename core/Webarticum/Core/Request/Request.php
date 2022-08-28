<?php

namespace Webarticum\Core\Request;

// TODO: request-chain with isApplicable (...) or exception
/**
 * Interface for request objects
 */
interface Request {
    
    /**
     * Returns with the request's HTTP method
     *
     * @return string
     */
    public function getMethod();
    
    /**
     * Returns with the request's path
     *
     * @return string
     */
    public function getPath();
    
    /**
     * Returns with the query data
     *
     * @return array
     */
    public function getQuery();
    
    /**
     * Returns with the query data
     *
     * @return array
     */
    public function getHeaders();
    
    /**
     * Returns with the posted data
     * 
     * Automatically converted to array in case of some content types.
     *
     * @return array
     */
    public function getData();
    
}
