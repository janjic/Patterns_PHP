<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:51 PM
 */

/**
 * A class to represent the CocaCola drink
 */
class CocaCola
{

    private $fizzy;
    private $healthy;
    private $tasty;

    /**
     * init a CocaCola drink
     */
    public function __construct()
    {
        $this->fizzy = true;
        $this->healthy = false;
        $this->tasty = true;
    }

    /**
     * This magic method is required, even if empty as part of the prototype pattern
     */
    public function __clone()
    {
    }

}