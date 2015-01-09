<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 12:21 PM
 */


/**
 * Class SamsFactoryMethod
 * @package Creational\Factory\Example1
 */
class SamsFactoryMethod extends AbstractFactoryMethod
{
    private $context = "Sams";

    function makePHPBook($param)
    {
        $book = NULL;
        switch ($param) {
            case "us":
                $book = new SamsPHPBook();
                break;
            case "other":
                $book = new OReillyPHPBook;
                break;
            case "otherother":
                $book = new VisualQuickstartPHPBook;
                break;
            default:
                $book = new SamsPHPBook;
                break;
        }
        return $book;
    }
}