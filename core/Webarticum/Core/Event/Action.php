<?php

namespace Webarticum\Core\Event;


/**
 * Interface for actions
 */
interface Action {
    
    /**
     * Executes the action in context of an event
     *
     * @param \Webarticum\Core\Event\Event $oEvent
     */
    public function trigger(Event $oEvent);
    
    /**
     * Executes the action in context of an event
     *
     * @param \Webarticum\Core\Event\Event $oEvent
     */
    public function __invoke(Event $oEvent);
    
}

