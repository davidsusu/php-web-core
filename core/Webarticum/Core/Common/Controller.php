<?php

namespace Webarticum\Core\Common;

/**
 * Interface for controllers
 * 
 * @deprecated
 */
interface Controller {
    
    /**
     * Processes query data from a GET request
     *
     * @return \Webarticum\Core\Request\Response
     */
    public function get($page, $get = []);
    
    /**
     * Processes query data from a POST request
     *
     * @return \Webarticum\Core\Request\Response
     */
    public function post($page, $post, $get = []);
    
}
