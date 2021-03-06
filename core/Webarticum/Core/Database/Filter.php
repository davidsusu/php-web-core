<?php

namespace Webarticum\Core\Database;


/**
 * Interface for query filter generators
 */
interface Filter {
    
    /**
     * Gets filter data
     *
     * @return array
     */
    public function toArray();
    
}

