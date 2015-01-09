<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:37 PM
 */

/**
 * @param $class_name
 * @throws Exception
 */
function __autoload($class_name)
{
    if (file_exists($class_name . '.php')) {
        require_once($class_name . '.php');
    } else {
        throw new Exception("Unable to load $class_name.");
    }
}

define('BR', '<' . 'BR' . '>');


echo 'BEGIN TESTING PROTOTYPE PATTERN' . BR;
echo BR;


$phpProto = new PHPBookPrototype();
$sqlProto = new SQLBookPrototype();


$book1 = clone $sqlProto;
$book1->setTitle('SQL For Cats');
echo 'Book 1 topic: ' . $book1->getTopic() . BR;
echo 'Book 1 title: ' . $book1->getTitle() . BR;


echo BR;


$book2 = clone $phpProto;
$book2->setTitle('OReilly Learning PHP 5');
echo 'Book 2 topic: ' . $book2->getTopic() . BR;
echo 'Book 2 title: ' . $book2->getTitle() . BR;


echo BR;


$book3 = clone $sqlProto;
$book3->setTitle('OReilly Learning SQL');
echo 'Book 3 topic: ' . $book3->getTopic() . BR;
echo 'Book 3 title: ' . $book3->getTitle() . BR;


echo BR . BR;
echo 'END TESTING PROTOTYPE PATTERN' . BR;