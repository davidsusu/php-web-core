<?php

namespace Webarticum\Core\Event;


/**
 * Interface for event managers
 */
interface EventMediator {
    
    /**
     * Executes actions associated to the type of the given event
     *
     * @param \Webarticum\Core\Event\Event $oEvent
     */
    public function fireEvent(Event $oEvent);
    
}

