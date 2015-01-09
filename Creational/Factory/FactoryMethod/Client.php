<?php

/**
 * The Client does not use include_once to make the concrete products available. It is unnecessary for even though the call
 * to the factoryMethod() includes the name of the class (e.g., Triangle()), the actual instantiation of the concrete product
 * is done by the Creator. So there’s no need for the Client to include any of the concrete products it requests.
 * Now that’s loose binding!
 */
include_once("ConcreteCreator.php");

/**
 * Class Client
 */
class Client
{
	public function __construct()
	{
		$shapeNow=new ConcreteCreator();
		$display=$shapeNow->factoryMethod(new Triangle());
		echo "<img src=$display><p />";
		$display=$shapeNow->factoryMethod(new Square());
		echo "<img src=$display><p />";
		$display=$shapeNow->factoryMethod(new Circle());
		echo "<img src=$display><p />";
		echo "These shapes are brought to you by:<br />";
		echo "The Factory Method Design Pattern";		
	}	
}
$worker=new Client();