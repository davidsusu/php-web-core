<?php

namespace Webarticum\Core\Cache;

use Webarticum\Core\Content\StoredSource;


/**
 * Interface for cached content providers
 */
interface CacheSource extends StoredSource {
    
    /**
     * Clears the cache
     */
    public function clear();
    
}
