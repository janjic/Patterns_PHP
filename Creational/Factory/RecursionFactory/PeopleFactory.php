<?php
class PeopleFactory implements Factory
{
    private $people;
    public function makeArray()
    {
        $this->people=new PeopleProduct();
        $product=$this->people->arrayProduct();
        sort($product);
        return $product;
    }
}
