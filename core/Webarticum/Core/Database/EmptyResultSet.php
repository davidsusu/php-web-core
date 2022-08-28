<?php

namespace Webarticum\Core\Database;


/**
 * Empty result set
 */
class EmptyResultSet implements ResultSet {
    
    #[\ReturnTypeWillChange]
    public function next() {
        // nothing to do
    }
    
    public function current() {
        return null;
    }
    
    public function key() {
        return null;
    }
    
    #[\ReturnTypeWillChange]
    public function valid() {
        return false;
    }
    
    #[\ReturnTypeWillChange]
    public function rewind() {
        // nothing to do
    }
    
    #[\ReturnTypeWillChange]
    public function count() {
        return 0;
    }
    
    public function open() {
        return true;
    }
    
    public function isOpen() {
        return false;
    }
    
    public function close() {
        return true;
    }
    
    public function reset() {
        return $this;
    }
    
    public function setFetchMode($mode, $param1 = null, $param2 = null) {
        return $this;
    }
    
    public function fetchNext($mode = null, $param1 = null, $param2 = null) {
        return false;
    }
    
    public function fetch($mode = null, $param1 = null, $param2 = null) {
        return null;
    }
    
    public function fetchAll($mode = null, $param1 = null, $param2 = null, $reset = true) {
        return [];
    }
    
    
}