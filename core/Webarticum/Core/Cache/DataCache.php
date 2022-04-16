<?php

namespace Webarticum\Core\Cache;


/**
 * Interface for dataCache
 */
interface DataCache {
    public function isValid();
    
    public function clear();  
}
