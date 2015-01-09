<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 11:25 PM
 */

class BookAdapter
{
    private $book;

    function __construct(SimpleBook $book_in)
    {
        $this->book = $book_in;
    }

    function getAuthorAndTitle()
    {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}