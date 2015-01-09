<?php
abstract class Creator
{
	protected $createdProduct;
	abstract public function factoryMethod(Product $productNow);
}
?>