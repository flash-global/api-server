<?php

namespace Fei\ApiServer\ObjectivePHP\Events;

/**
 * Interface EventsHandlerAwareInterface
 *
 * @package Fei\ApiServer\ObjectivePHP\Events
 */
interface EventsHandlerAwareInterface
{
    /**
     * Get the EventsHandler instance
     *
     * @return EventsHandlerInterface
     */
    public function getEventsHandler();

    /**
     * Set the EventsHandler instance
     *
     * @param EventsHandlerInterface $eventsHandler
     *
     * @return $this
     */
    public function setEventsHandler(EventsHandlerInterface $eventsHandler);
}