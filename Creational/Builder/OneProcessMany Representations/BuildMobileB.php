<?php
//BuilderB.php
class BuildMobileB implements IBuilder
{
    private $product;
    
    function __construct()
    {
        $this->product=new Product();
    }
    
    public function mainHead()
    {
        $this->product->assemble('<rect x="0" y="0" width="200" height="30" fill="#468966" stroke="none" stroke-width="none"  />');
    }
    public function subHead()
    {
        $this->product->assemble('<rect x="0" y="35" width="150" height="20" fill="#b64926" stroke="none" stroke-width="none"  />');
    }
    public function buildNavH()
    {
        $this->product->assemble("");
    }
    public function buildNavV()
    {
        $this->product->assemble('<rect x="0" y="57" width="200" height="15" rx="15" fill="#ffb03b" stroke="none" stroke-width="none"  /> ');
    }
    public function buildGraphic()
    {
        $this->product->assemble("");
    }
    public function buildVideo()
    {
        $this->product->assemble('<rect x="0" y="75" width="200" height="150" fill="none" stroke="#8e2800" stroke-width="2"  /> <circle cx="94" cy="146" r="20" fill="#fff0a5" stroke="none" stroke-width="none"  /> <path d="M 90 130 L 110 145 L 90 160 z" fill="#8e2800" stroke="none" stroke-width="none" />');
    }
    public function buildBodyText()
    {
        $this->product->assemble('<g stroke="#5a5a5a">
<line x1="10" y1="235" x2="190" y2="235" stroke-width="1" /> <line x1="10" y1="245" x2="190" y2="245" stroke-width="1" /> <line x1="10" y1="255" x2="190" y2="255" stroke-width="1" /></g>');
    }
    public function getResult()
    {
        return $this->product;   
    }    
}

?>