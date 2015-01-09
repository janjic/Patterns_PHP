<?php
include_once('Product.php');
class Square implements Product
{
	public function provideShape()
	{
		return "products/square.png";
	}
}
?>