<?php
class PetsFactory implements Factory
{
    private $pets;
    public function makeArray()
    {
        $this->pets=new PetsProduct();
        $product=$this->pets->arrayProduct();
        sort($product);
        return $product;
    }
}