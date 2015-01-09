<?php
/**
 * Separate the construction of a complex object from its representation so that the same construction process can create
 * different representations.  Unlike creational patterns that construct products in one shot, the Builder pattern constructs
 * the product step by step under the control of the "director".
 *
 * In the Builder Pattern a director and a builder work together to build an object. The director controls the building
 * and specifies what parts and variations will go into an object. The builder knows how to assemble the object given
 * specification. In this example we have a director, HTMLPageDirector, which is given a builder, HTMLPageBuilder.
 * The director tells the builder what the pageTitle will be, what the pageHeading will be, and gives multiple lines of
 * text for the page. The director then has the bulder do a final assembly of the parts, and return the page.
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

writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

$pageBuilder = new HTMLPageBuilder();
$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();
$page = $pageDirector->GetPage();
writeln($page->showPage());
writeln('');

writeln('END TESTING BUILDER PATTERN');

function writeln($line_in)
{
    echo $line_in . "<br/>";
}