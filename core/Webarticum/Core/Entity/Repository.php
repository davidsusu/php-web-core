<?php

namespace Webarticum\Core\Entity;


/**
 * Interface for repositories of entities
 */
interface Repository extends \Countable {
    
    /**
     * Creates a new unsaved entity
     *
     * @return \Webarticum\Core\Entity\Entity
     */
    public function create();
    
    /**
     * Gets an entity by it ID
     *
     * @param int $id
     * @return \Webarticum\Core\Entity\Entity|null
     */
    public function get($id);
    
    /**
     * Gets multiple entities by IDs
     *
     * @param int[] $idList
     * @return \Webarticum\Core\Entity\Entity[]|\Traversable
     */
    public function getAll($idList = null);
    
    /**
     * Removes an entity by its ID or by its name
     *
     * @param int $id
     */
    public function delete($id);
    
    /**
     * Removes multiple entities by IDs
     *
     * @param int[] $idList
     */
    public function deleteAll($idList = null);
    
    /**
     * Checks whether the entity exists
     *
     * @param int $id
     * @return boolean
     */
    public function exists($id);
    
}

