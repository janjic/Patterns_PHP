<?php
//BuildPix.php            
class BuildPix implements IBuilder
{
    private $product;

    function __construct()
    {
        $this->product=new Product();
    }

    public function buildHead()
    {
        $this->product->assemble('<h1>A Graphic for You</h1>');
    }
    public function buildMedia()
    {
        $this->product->assemble('<img src="diagram.png" alt="filler picture">');
    }
    public function buildCaption()
    {
        $this->product->assemble('<h4>Man in Hat</h4>');
    }

    public function getResult()
    {
        return $this->product;
    }
}