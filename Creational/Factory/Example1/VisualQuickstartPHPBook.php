<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 12:28 PM
 */



class VisualQuickstartPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;

    function __construct()
    {
        $this->author = 'Larry Ullman';
        $this->title = 'PHP for the World Wide Web';
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
