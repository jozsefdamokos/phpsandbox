<?php

namespace Interview\Challenge2;

/*
 * Implement interface methods and proxy them to Laravel event dispatcher
 */

use Illuminate\Events\Dispatcher;

class LaravelEventDispatcher implements EventDispatcherInterface
{
    private Dispatcher $baseLaravelDispatcher;

    public function __construct()
    {
        $this->baseLaravelDispatcher = new Dispatcher();
    }

    public function dispatch(object $event)
    {
        $this->baseLaravelDispatcher->dispatch($event);
    }

    public function addListener(string $event, \Closure $listener)
    {
        $this->baseLaravelDispatcher->listen($event, $listener);
    }
}