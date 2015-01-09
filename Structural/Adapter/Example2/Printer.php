<?php

/**
 * Structural patterns are concerned with the structure of the object graph, and influence the hierarchy of subclassing,
 * and where to introduce interfaces and associations. The first structural pattern we will touch is the Adapter pattern:
 * an Adapter converts an already existent Adaptee class which presents a not usable (maybe implicit) interface to another
 * Target interface, which other Clients components are ready to use. This pattern is often used to integrate different
 * parts of an application, because it magically makes talk to each other classes which were strangers. You can consider
 * also to modify the classes to improve their relationship, but only if you own them and no backward compatibility is required;
 * the main problem resides in not introducing unnecessary coupling.
 */


/**
 * @param $class_name
 * @throws Exception
 */
function __autoload($class_name)
{
    if (file_exists($class_name . '.php'))
    {
        require_once($class_name . '.php');
    } else {
        throw new Exception("Unable to load $class_name.");
    }
}

/**
 * The Client. It would love to print an array, but it only
 * accepts Collections.
 */
class Printer
{
    public function printAndRemove(Collection $c)
    {
        foreach ($c as $index => $element) {
            $c->remove($element);
            printf("| %.6s => %.6s |", $index, $element);
        }
        echo "\n";
    }

}
// The Adaptee is not a class but an array.
$array = array('foo', 'bar', 'baz');
$printer = new Printer();
$adapter = new ArrayAdapter($array);
$printer->printAndRemove($adapter);
var_dump($adapter->contains('foo'));