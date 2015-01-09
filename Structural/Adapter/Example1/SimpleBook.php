<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 11:25 PM
 */

class SimpleBook
{
    private $author;
    private $title;

    function __construct($author_in, $title_in)
    {
        $this->author = $author_in;
        $this->title = $title_in;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }
}