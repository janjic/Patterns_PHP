<?php
//ConcreteCreator.php
include_once('Creator.php');
include_once('Triangle.php');
include_once('Square.php');
include_once('Circle.php');

/**
 * Class ConcreteCreator
 */
class ConcreteCreator extends Creator
{
	public function factoryMethod(Product $productNow)
	{
		$this->createdProduct=new $productNow();
		return($this->createdProduct->provideShape());
	}
}
