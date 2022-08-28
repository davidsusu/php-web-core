<?php

namespace Webarticum\Core\Entity;


/**
 * Interface for updateable entity objects
 */
interface UpdateableEntity extends Entity {
    
    /**
     * Updates the data of the entity in REST style
     *
     * @return UpdateableEntity
     */
    public function updateData($updates);
    
    /**
     * Saves changes
     *
     * @return boolean
     */
    public function save();
    
}

