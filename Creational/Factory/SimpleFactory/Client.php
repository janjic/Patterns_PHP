<?php

/**
 * Simple factories, which are sometimes called static factories, are the simplest form of a factory. Although it’s not
 * an official design pattern, it does have it’s uses especially in small to mid sized applications.
 * Simple factories are classes which can return a single class (these are called product classes) instance, the class
 * to initialise could be hard coded (if the factory only returns objects of one particular product) or determined at
 * runtime (if there are multiple classes which could be initialised), this is commonly done with a switch statement.
 * Rules:
     *  The factory class must have a static method, this is called a factory method.
     *  The factory method must return a class instance.
     *  Only one object should be created and returned at a time.
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



try {

    $cat = AnimalFactory::factory('cat'); // object(Cat)#1
    echo $cat->getSpecies(); // cat

    $dog = AnimalFactory::factory('dog'); // object(Dog)#1
    echo $dog->getSpecies(); // dog

    $hippo = AnimalFactory::factory('hippopotamus'); // This will throw an Exception

} catch(Exception $e) {
    echo $e->getMessage(); // AnimalFactory could not create animal of species 'hippopotamus'
}