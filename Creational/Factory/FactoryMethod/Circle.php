<?php
include_once('Product.php');
class Circle implements Product
{
	public function provideShape()
	{
		return "products/circle.png";
	}	
}
?>