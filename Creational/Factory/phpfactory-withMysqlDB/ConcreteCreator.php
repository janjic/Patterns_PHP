<?php
class ConcreteCreator implements Creator
{
	public function factoryMethod(Product $product)
	{	
			return($product->getData());
	}
}
?>