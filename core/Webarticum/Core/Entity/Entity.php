<?php

namespace Webarticum\Core\Entity;


/**
 * Interface for entity objects
 */
interface Entity {
    
    /**
     * Gets the ID of the entity
     *
     * @return int
     */
    public function getId();
    
    /**
     * Gets the label of the entity
     *
     * @return string
     */
    public function getLabel();
    
    /**
     * Gets the public data of the entity
     *
     * @return string
     */
    public function getData();
    
}

