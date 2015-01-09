<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:36 PM
 */

abstract class BookPrototype
{

    protected $title;
    protected $topic;


    abstract function __clone();


    function getTitle()
    {
        return $this->title;
    }

    function setTitle($titleIn)
    {
        $this->title=$titleIn;
    }


    function getTopic()
    {
        return $this->topic;
    }

}