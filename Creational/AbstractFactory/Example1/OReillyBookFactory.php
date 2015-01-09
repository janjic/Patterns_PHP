<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 6:51 PM
 */

class OReillyBookFactory extends AbstractBookFactory
{
    private $context = "OReilly";

    function makePHPBook()
    {
        return new OReillyPHPBook;
    }

    function makeMySQLBook()
    {
        return new OReillyMySQLBook;
    }
}