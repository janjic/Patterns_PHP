<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:36 PM
 */

class PHPBookPrototype extends BookPrototype
{


    function __construct()
    {
        $this->topic = 'PHP';
    }


    function __clone()
    {
    }

}