<?php

/**
 * In the Adapter Design Pattern, a class converts the interface of one class to be what another class expects.
 * In this example we have a SimpleBook class that has a getAuthor() and getTitle() methods. The client, expects a
 * getAuthorAndTitle() method. To "adapt" SimpleBook for testAdapter we have an adapter class, BookAdapter, which takes
 * in an instance of SimpleBook, and uses the SimpleBook getAuthor() and getTitle() methods in it's own getAuthorAndTitle()
 * method.
 * Adapters are helpful if you want to use a class that doesn't have quite the exact methods you need, and you can't
 * change the orignal class. The adapter can take the methods you can access in the original class, and adapt them into
 * the methods you need.
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



// client

writeln('BEGIN TESTING ADAPTER PATTERN');
writeln('');

$book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
$bookAdapter = new BookAdapter($book);
writeln('Author and Title: ' . $bookAdapter->getAuthorAndTitle());
writeln('');

writeln('END TESTING ADAPTER PATTERN');

function writeln($line_in)
{
    echo $line_in . "<br/>";
}
