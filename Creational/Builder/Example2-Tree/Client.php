<?php

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
 * A Director might encapsulate this sample code that uses the Builder.
 */
$builder = new DumbUnbalancedTreeBuilder();
echo("ADD <br>");
$builder->addNumber(7);
echo("END <br>");
echo("ADD <br>");
$builder->addNumber(1);
echo("END <br>");
echo("ADD <br>");
$builder->addNumber(3);
echo("END <br>");
echo("ADD <br>");
$builder->addNumber(5);
echo("END <br>");
$builder->addNumber(2);
/*
 * $builder->addNumber(2
$builder->addNumber(8);
$builder->addNumber(6);
$builder->addNumber(9);
$builder->addNumber(5);
$builder->addNumber(4);
$builder->addNumber(2*/
$builder->getTree()->dump();