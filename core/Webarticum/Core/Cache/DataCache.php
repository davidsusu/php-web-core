<?php

namespace Webarticum\Core\Cache;


/**
 * Interface for data caches
 */
interface DataCache {
    public function isValid();
    
    public function clear();  
}
