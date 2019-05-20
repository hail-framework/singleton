<?php

namespace Hail\Singleton;

trait SingletonTrait
{
    protected static $instance;

    /**
     * @return static
     */
    final public static function getInstance()
    {
        return static::$instance[static::class] ?? (static::$instance[static::class] = new static);
    }

    /**
     * Singleton constructor.
     */
    final private function __construct()
    {
        $this->init();
    }

    /**
     * Initializes the singleton
     */
    protected function init(): void
    {
    }

    final public function __wakeup()
    {
    }

    final private function __clone()
    {
    }
}
