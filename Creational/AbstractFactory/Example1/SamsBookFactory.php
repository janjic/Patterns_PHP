<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 6:51 PM
 */

class SamsBookFactory extends AbstractBookFactory
{
    private $context = "Sams";

    function makePHPBook()
    {
        return new SamsPHPBook;
    }

    function makeMySQLBook()
    {
        return new SamsMySQLBook;
    }
}