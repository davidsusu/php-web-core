<?php

namespace Webarticum\Core\Cache;


/**
 * Base class for cached data sources
 */
abstract class SessionDataCache implements DataCache {
    protected $oSession;
    protected $name;
    protected $lifetime;
    protected $data = null;
    
    /**
     * @param \Webarticum\Core\Session\Session $oSession
     * @param string $name
     * @param int $lifetime
     */
    public function __construct($oSession, $name, $lifetime) {
        $this->oSession = $oSession;
        $this->name = $name;
        $this->lifetime = $lifetime;
    }
    
    /**
     * Gets the data
     *
     * @return mixed
     */
    public function getData() {
        if (is_null($this->data)) {
            if ($this->isValid()) {
                $this->data = $this->oSession->get($this->name);
            } else {
                $this->setData($this->_getData());
            }
        }
                
        return $this->data;
    }
    
    /**
     * Sets the data
     *
     * @param array $data_array
     */
    public function setData($data_array) {
        $this->data = $data_array;
        $this->oSession->set($this->name, ["timestamp" => time(), "data" => $this->data]);
    }
    
    /**
     * Checks whether the cache is not expired
     *
     * @return boolean
     */
    public function isValid() {
        $session_item = $this->oSession->get($this->name);
        
        return (
            $session_item &&
            $session_item["timestamp"] + $this->lifetime > time()
        );
    }
    
    /**
     * Explicitly clears the cache
     */
    public function clear() {
        $this->data = null;
        $this->oSession->del($this->name);
    }

    abstract protected function _getData();
}
