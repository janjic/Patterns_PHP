<?php
class Rectangle extends IComponent
{
    private $xpos;
    private $ypos;
    private $wide;
    private $high;
    private $fill;
    private $stroke;
    private $strWidth;
    
    public function __construct($rx,$ry,$rw,$rh,$f,$sc,$sw)
    {
        $this->xpos=$rx;
        $this->ypos=$ry;
        $this->wide=$rw;
        $this->high=$rh;
        $this->fill=$f;
        $this->stroke=$sc;
        $this->strWidth=$sw;   
    }
    
    /* None of this batch of methods are used by shape or rectangle leaf */
    /* However in order to correctly implement the interface */
    /* you need some kind of implementation */
    public function add(IComponent $comOn){}
    public function remove(IComponent $comGone){}
    public function getChild($int){}
    protected function getComposite() {}
    
    /* Draw Rectangle */
    public function draw()
    {  
        echo "<rect x='$this->xpos' y='$this->ypos' width='$this->wide' height='$this->high' fill='$this->fill' stroke='$this->stroke' stroke-width='$this->strWidth' />";
    }
}
?>