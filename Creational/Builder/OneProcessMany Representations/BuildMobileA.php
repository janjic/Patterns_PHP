<?php

//BuilderA.php
class BuildMobileA implements IBuilder
{
    private $product;

    function __construct()
    {
        $this->product = new Product();
    }

    public function mainHead()
    {
        $this->product->assemble('<rect x="0" y="0" width="200" height="30" fill="#000099" stroke="#cc0000" stroke-width="2"  />');
    }

    public function subHead()
    {
        $this->product->assemble('<rect x="0" y="35" width="150" height="20" fill="#cc0000" stroke="#00cc00" stroke-width="2"  />');
    }

    public function buildNavH()
    {
        $this->product->assemble('<circle cx="65" cy="65" r="4" stroke="none" stroke-width="0" fill="#00cc00" /><circle cx="75" cy="65" r="4" stroke="none" stroke-width="0" fill="#00cc00" /><circle cx="85" cy="65" r="4" stroke="none" stroke-width="0" fill="#00cc00" /><circle cx="95" cy="65" r="4" stroke="none" stroke-width="0" fill="#00cc00" /><circle cx="105" cy="65" r="4" stroke="none" stroke-width="0" fill="#00cc00" />');
    }

    public function buildNavV()
    {
        $this->product->assemble("");
    }

    public function buildGraphic()
    {
        $this->product->assemble('<rect x="0" y="75" width="200" height="200" fill="none" stroke="#cc0000" stroke-width="2"  /> <g stroke="#cc0000"> <line x1="0" y1="75" x2="200" y2="275" stroke-width="2"  /><line x1="200" y1="75" x2="0" y2="275" stroke-width="2"  /></g>');
    }

    public function buildVideo()
    {
        $this->product->assemble("");
    }

    public function buildBodyText()
    {
        $this->product->assemble('<g stroke="#5a5a5a">
<line x1="10" y1="290" x2="190" y2="290" stroke-width="1" /> <line x1="10" y1="300" x2="190" y2="300" stroke-width="1" /> <line x1="10" y1="310" x2="190" y2="310" stroke-width="1" /></g>');
    }

    public function getResult()
    {
        return $this->product;
    }
}

?>