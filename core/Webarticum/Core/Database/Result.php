<?php

namespace Webarticum\Core\Database;


/**
 * Interface for database result handling
 */
interface Result extends ErrorStatus {
    
    /**
     * Checks success
     *
     * @return boolean
     */
    public function isSuccess();
    
    /**
     * Gets the result set
     *
     * @return \Webarticum\Core\Database\ResultSet
     */
    public function getResultSet();
    
    /**
     * Gets last insert-id if any
     *
     * @return string|int|null
     */
    public function getLastInsertId();
    
    /**
     * Gets the connection associated to this result
     *
     * @return Connection|null
     */
    public function getConnection();
    
}
