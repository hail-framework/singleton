<?php

namespace Hail\Singleton;

trait SingletonTrait
{
    /**
     * @var static
     */
    protected static $instance;

    final public static function getInstance(): static
    {
        return static::$instance[static::class] ??= new static;
    }

    /**
     * Singleton constructor.
     */
    final public function __construct()
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

    final public function __clone()
    {
    }
}
