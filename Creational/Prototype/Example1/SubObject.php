<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:27 PM
 */

class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct()
    {
        $this->instance = ++self::$instances;
    }

    public function __clone()
    {
        $this->instance = ++self::$instances;
    }
}