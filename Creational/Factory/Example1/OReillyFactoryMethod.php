<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 12:01 PM
 */



/**
 * Class OReillyFactoryMethod
 */
class OReillyFactoryMethod extends AbstractFactoryMethod
{
    private $context = "OReilly";
    /**
     * @param $param
     * @return mixed|null|OReillyPHPBook|SamsPHPBook
     */
    function makePHPBook($param)
    {
        $book = NULL;
        switch ($param) {
            case "us":
                $book = new OReillyPHPBook();
                break;
            case "other":
                $book = new SamsPHPBook();
                break;
            default:
                $book = new OReillyPHPBook();
                break;
        }
        return $book;
    }
}