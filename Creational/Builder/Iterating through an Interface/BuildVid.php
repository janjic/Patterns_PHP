<?php
//BuildVid.php
class BuildVid implements IBuilder
{
    private $product;

    function __construct()
    {
        $this->product=new Product();
    }

    public function buildHead()
    {
        $this->product->assemble('<h1>Free Tip!</h1>');
    }
    public function buildMedia()
    {
        $this->product->assemble('<iframe width="420" height="315" src="http://www.youtube.com/embed/JbioSmyapuE?rel=0" frameborder="0" allowfullscreen></iframe>');
    }
    public function buildCaption()
    {
        $this->product->assemble('<h4>Do <em>Not</em> Lose The Director!</h4>');
    }

    public function getResult()
    {
        return $this->product;
    }
}