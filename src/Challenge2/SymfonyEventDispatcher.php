<?php

namespace Interview\Challenge2;

/*
 * Implement interface methods and proxy them to Symfony event dispatcher
 */

use Symfony\Component\EventDispatcher\EventDispatcher;

class SymfonyEventDispatcher implements EventDispatcherInterface
{
    private EventDispatcher $baseSymfonyDispatcher;

    public function __construct()
    {
        $this->baseSymfonyDispatcher = new EventDispatcher();
    }

    public function dispatch(object $event)
    {
        $this->baseSymfonyDispatcher->dispatch($event);
    }

    public function addListener(string $event, \Closure $listener)
    {
        $this->baseSymfonyDispatcher->addListener($event, $listener);
    }
}