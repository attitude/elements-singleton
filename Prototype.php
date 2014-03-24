<?php

namespace attitude\Elements;

abstract class Singleton_Prototype implements Singleton_Interface
{
    protected static $instances = array();

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
        $class_name = get_called_class();
        
        return ! isset(static::$instances[$class_name]) ? static::$instances[$class_name] = new static : static::$instances[$class_name];
    }
}
