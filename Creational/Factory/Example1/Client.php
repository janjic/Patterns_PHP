<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 12:29 PM
 */

/**
 * In the Factory Method Pattern, a factory method defines what functions must be available in the non-abstract or
 * concrete factory. These functions must be able to create objects that are extensions of a specific class. Which exact
 * subclass is created will depend on the value of a parameter passed to the function.
 * In this example we have a factory method, AbstractFactoryMethod, that specifies the function, makePHPBook($param).
 * The concrete class OReillyFactoryMethod factory extends AbstractFactoryMethod, and can create the correct the extension of the
 * AbstractPHPBook class for a given value of $param.
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

writeln('START TESTING FACTORY METHOD PATTERN');
writeln('');

writeln('testing OReillyFactoryMethod');
$factoryMethodInstance = new OReillyFactoryMethod();
testFactoryMethod($factoryMethodInstance);
writeln('');

writeln('testing SamsFactoryMethod');
$factoryMethodInstance = new SamsFactoryMethod;
testFactoryMethod($factoryMethodInstance);
writeln('');

writeln('END TESTING FACTORY METHOD PATTERN');
writeln('');

function testFactoryMethod(AbstractFactoryMethod $factoryMethodInstance)
{
    $phpUs = $factoryMethodInstance->makePHPBook("us");
    writeln('us php Author: ' . $phpUs->getAuthor());
    writeln('us php Title: ' . $phpUs->getTitle());

    $phpUs = $factoryMethodInstance->makePHPBook("other");
    writeln('other php Author: ' . $phpUs->getAuthor());
    writeln('other php Title: ' . $phpUs->getTitle());

    $phpUs = $factoryMethodInstance->makePHPBook("otherother");
    writeln('otherother php Author: ' . $phpUs->getAuthor());
    writeln('otherother php Title: ' . $phpUs->getTitle());
}

function writeln($line_in)
{
    echo $line_in . "<br/>";
}