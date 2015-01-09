<?php

class Database
{

    /**
     * Used to store and provide instance for the getInstance() method
     */
    private static $instance;

    /**
     * Hidden constructor, only callable from within this class
     */
    private function __construct()
    {
    }

    /**
     * Create an instance if it hasn't been already
     * Then return the instance of this class
     * @return self
     */
    public static function getInstance()
    {

        if (!self::$instance) {
// instance doesn't exist yet, so create it
            self::$instance = new self();
        }

// return an instance of this class (Database)
        return self::$instance;
    }

    /**
     * Hidden magic clone method, make sure an instance this class
     * cannot be cloned using the clone keyword
     */
    private function __clone()
    {
    }

}

// Making two calls to Database::getInstance(); return the same object
$db = Database::getInstance();
var_dump($db); // object(Database)#1 (0) { }

$db2 = Database::getInstance();
var_dump($db2); // object(Database)#1 (0) { }

// Database cannot be initialise with the new keyword and will create a fatal error
// Fatal error: Call to private Database::__construct() from invalid context
// in singleton.php on line 44
//$db_fatal_error = new Database();