<?php

namespace Webarticum\Core\Request;


/**
 * Interface for downloadable things
 */
interface Downloadable {
    
    /**
     * Runs the download
     */
    public function download();
    
}
