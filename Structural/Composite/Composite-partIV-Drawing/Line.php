<?php
class Line extends IComponent
{
    private $xpos1;
    private $ypos1;
    private $xpos2;
    private $ypos2;
    private $stroke;
    private $strWidth;
    
    public function __construct($x1,$y1,$x2,$y2,$sc,$sw)
    {
        $this->xpos1=$x1;
        $this->ypos1=$y1;
        $this->xpos2=$x2;
        $this->ypos2=$y2;
        $this->stroke=$sc;
        $this->strWidth=$sw;   
    }
    
    /* None of this batch of methods are used by the line leaf */
    /* However in order to correctly implement the interface */
    /* you need some kind of implementation */
    public function add(IComponent $comOn){}
    public function remove(IComponent $comGone){}
    public function getChild($int){}
    protected function getComposite() {}
    
    /* Draw Line */
    public function draw()
    {  
        echo "<g stroke='$this->stroke'>";
        echo "<line x1='$this->xpos1' y1='$this->ypos1' x2='$this->xpos2' y2='$this->ypos2' stroke-width='$this->strWidth' />";
        echo "</g>";
    }
}
?>