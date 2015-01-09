<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
include_once('Product.php');
include_once('TextProduct.php');
include_once('GraphicProduct.php');
include_once('Creator.php');
include_once('ConcreteCreator.php');

class Client
{
	private $textGetter;
	private $graphicGetter;
	
	public function displayText()
	{	
		$this->textGetter=new ConcreteCreator();
		print($this->textGetter->factoryMethod(new TextProduct()));
	}
	
	public function displayGraphics()
	{	
		$this->graphicGetter=new ConcreteCreator();
		print($this->graphicGetter->factoryMethod(new GraphicProduct()));
	}
}
?>