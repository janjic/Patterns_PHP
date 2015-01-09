<?php

/**
 * The goal here, is to create a factory (the abstract factory), which creates product factories (in the example below
 * these are output types). The product factories then create the actual products (below these are the pretty and ugly
 * output type classes). Each product factory class has multiple methods for creating different class instances.
 * Rules
     * Each product factory must extend the same abstract class or implement the same interface.
     * Each product factory must have multiple methods, one for each class it wants to initialise.
     * Each product factory class you create must have the same methods. The same methods in each factory must return
     * polymorphic class instances and implement the same interface . If this is still unclear, the example should clear
     * things up.
 *
 * Advantages
     * Hides product classes from the client/controller, which helps to remove dependencies.
     * All product classes are made to be polymorphic, thus interchangable.
     * It promote consistency among products, all products should be grouped by the product factories
 *
 * Drawbacks
     * When adding a new product class, the abstract factory would need updating, this violates the Interface Segregation principle.
     * You’ll be hard pushed to find someone who actually gives a damn.
 */

/**
 * This is the abstract factory, each factory should extend this (WebOutputTypeFactory & DataOutputTypeFactory)
 */
abstract class AbstractOutputTypeFactory
{
    abstract public function prettyOutput();

    abstract public function uglyOutput();
}

/**
 * All class which represent pretty output, should extend this class
 */
abstract class AbstractPrettyOutput
{
    abstract public function getPrettyOutput();
}

/**
 * All class which represent ugly output, should extend this class
 */
abstract class AbstractUglyOutput
{
    abstract public function getUglyOutput();
}

/**
 * This is a factory which can create all types of web output objects
 */
class WebOutputTypeFactory extends AbstractOutputTypeFactory
{
    public function prettyOutput()
    {
        return new WebPrettyOutput();
    }

    public function uglyOutput()
    {
        return new WebUglyOutput();
    }
}

/**
 * This is a factory which can create all types of data output objects
 */
class DataOutputTypeFactory extends AbstractOutputTypeFactory
{
    public function prettyOutput()
    {
        return new DataPrettyOutput();
    }

    public function uglyOutput()
    {
        return new DataUglyOutput();
    }
}

/**
 * This class will represent pretty web output (e.g. HTML)
 */
class WebPrettyOutput extends AbstractPrettyOutput
{
    public function getPrettyOutput()
    {
        return 'Imagine you had some really pretty web output here';
    }
}

/**
 * This class will represent ugly web output (e.g. XML)
 */
class WebUglyOutput extends AbstractUglyOutput
{
    public function getUglyOutput()
    {
        return 'Imagine you had some really ugly web output here';
    }
}

/**
 * This class will represent pretty data output (e.g. JSON)
 */
class DataPrettyOutput extends AbstractPrettyOutput
{
    public function getPrettyOutput()
    {
        return "{ 'text': 'Imagine you had some really pretty data output here' }";
    }
}

/**
 * This class will represent ugly data output(e.g. CSV)
 */
class DataUglyOutput extends AbstractUglyOutput
{
    public function getUglyOutput()
    {
        return 'Imagine, you, had, some, really, ugly, CSV, output, here';
    }
}

// this is used to create web outputs
$webFactory = new WebOutputTypeFactory();

$webPretty = $webFactory->prettyOutput();
echo $webPretty->getPrettyOutput(); // Imagine you had some really pretty web output here

$webUgly = $webFactory->uglyOutput();
echo $webUgly->getUglyOutput(); // Imagine you had some really ugly web output here

// this is used to create data outputs
$dataFactory = new DataOutputTypeFactory();

$dataPretty = $dataFactory->prettyOutput();
echo $dataPretty->getPrettyOutput(); // { 'text': 'Imagine you had some really pretty data output here' }

$dataUgly = $dataFactory->uglyOutput();
echo $dataUgly->getUglyOutput(); // Imagine, you, had, some, really, ugly, CSV, output, here