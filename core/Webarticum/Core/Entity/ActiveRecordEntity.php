<?php

namespace Webarticum\Core\Entity;

use Webarticum\Core\Database\ActiveRecord;


/**
 * Database active record based entity
 */
class ActiveRecordEntity implements UpdateableEntity {
    
    protected $oActiveRecord;
    
    public function __construct(ActiveRecord $oActiveRecord) {
        $this->oActiveRecord = $oActiveRecord;
    }
    
    /**
     * Gets the ID of the entity
     *
     * @return int
     */
    public function getId() {
        return $this->oActiveRecord->getId();
    }
    
    /**
     * Gets the label of the entity
     *
     * @return string
     */
    public function getLabel() {
        $id = $this->getId();
        $classname = (new \ReflectionClass($this))->getShortName();
        return $id ? $classname . "[" . $this->getId() . "]" : "New " . $classname;
    }
    
    /**
    * Gets the wrapped active record
    * 
    * @return \Webarticum\Core\Database\ActiveRecord
    */
    public function getActiveRecord() {
        return $this->oActiveRecord;
    }
    
    /**
     * Gets the public data of the entity
     *
     * @return string
     */
    public function getData() {
        return $this->getActiveRecord()->getRow();
    }
    
    /**
     * Updates the data of the entity in REST style
     *
     * @return ActiveRecord
     */
    public function updateData($updates) {
        $this->getActiveRecord()->setFields($updates);
        return $this;
    }
    
    /**
     * Saves changes
     *
     * @return boolean
     */
    public function save() {
        return $this->oActiveRecord->commit();
    }

    /**
     * Gets whether this entity is stored
     *
     * @return boolean
     */
    public function isStored() {
        return $this->oActiveRecord->isStored();
    }

    /**
     * Deletes this entity
     *
     * @return boolean
     */
    public function delete() {
        return $this->oActiveRecord->delete();
    }
    
    public function __toString() {
        return $this->getLabel();
    }
}

