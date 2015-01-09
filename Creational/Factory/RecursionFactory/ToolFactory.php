<?php
class ToolFactory implements Factory
{
    private $tools;
    public function makeArray()
    {
        $this->tools=new ToolProduct();
        $product=$this->tools->arrayProduct();
        rsort($product);
        return $product;
    }
}
