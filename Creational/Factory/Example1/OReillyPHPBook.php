<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 12:27 PM
 */



/**
 * Class OReillyPHPBook
 * @package Creational\Factory\Example1
 */
class OReillyPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;
    private static $oddOrEven = 'odd';

    function __construct()
    {
        //alternate between 2 books
        if ('odd' == self::$oddOrEven) {
            $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
            $this->title = 'Programming PHP';
            self::$oddOrEven = 'even';
        } else {
            $this->author = 'David Sklar and Adam Trachtenberg';
            $this->title = 'PHP Cookbook';
            self::$oddOrEven = 'odd';
        }
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