<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:37 PM
 */

class SQLBookPrototype extends BookPrototype
{


    function __construct()
    {
        $this->topic = 'SQL';
    }


    function __clone()
    {
    }


}