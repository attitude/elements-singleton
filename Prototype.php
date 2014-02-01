<?php

namespace attitude\Elements;

abstract class Singleton_Prototype implements Singleton_Interface
{
    protected static $instance = null;

    /**
     * Class constructor method
     *
     * @returns object  Returns `$this`
     *
     */
    protected function __construct()
    {
        return $this;
    }

    /**
     * Returns singleton instance of this class
     *
     * @returns object  Instance of `$this`
     *
     */
    public static function instance()
    {
        return static::$instance===null ? static::$instance = new static : static::$instance;
    }
}
