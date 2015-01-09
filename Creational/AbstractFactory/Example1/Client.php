<?php

/**
 * Provide an interface for creating families of related or dependent objects without specifying their concrete classes.
 * In the Abstract Factory Pattern, an abstract factory defines what objects the non-abstract or concrete factory will need to be
 * able to create.
 * The concrete factory must create the correct objects for it's context, insuring that all objects created by the concrete factory
 * have been chosen to be able to work correctly for a given circumstance.
 * In this example we have an abstract factory, AbstractBookFactory, that specifies two classes, AbstractPHPBook and AbstractMySQLBook,
 * which will need to be created by the concrete factory.
 * The concrete class OReillyBookfactory extends AbstractBookFactory, and can create the OReillyMySQLBook and OReillyPHPBook classes,
 * which are the correct classes for the context of OReilly.
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
writeln('BEGIN TESTING ABSTRACT FACTORY PATTERN');
writeln('');

writeln('testing OReillyBookFactory');
$bookFactoryInstance = new OReillyBookFactory;
testConcreteFactory($bookFactoryInstance);
writeln('');

writeln('testing SamsBookFactory');
$bookFactoryInstance = new SamsBookFactory;
testConcreteFactory($bookFactoryInstance);

writeln("END TESTING ABSTRACT FACTORY PATTERN");
writeln('');

function testConcreteFactory($bookFactoryInstance)
{
    $phpBookOne = $bookFactoryInstance->makePHPBook();
    writeln('first php Author: ' . $phpBookOne->getAuthor());
    writeln('first php Title: ' . $phpBookOne->getTitle());

    $phpBookTwo = $bookFactoryInstance->makePHPBook();
    writeln('second php Author: ' . $phpBookTwo->getAuthor());
    writeln('second php Title: ' . $phpBookTwo->getTitle());

    $mySqlBook = $bookFactoryInstance->makeMySQLBook();
    writeln('MySQL Author: ' . $mySqlBook->getAuthor());
    writeln('MySQL Title: ' . $mySqlBook->getTitle());
}

function writeln($line_in)
{
    echo $line_in . "<br/>";
}
