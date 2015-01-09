<?php
include_once('Product.php');
class Triangle implements Product
{
	public function provideShape()
	{
		return "products/triangle.png";
	}
}
?>