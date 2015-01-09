<?php
class Circle extends IComponent
{
    private $xpos;
    private $ypos;
    private $radius;
    private $fill;
    private $stroke;
    private $strWidth;
    
    public function __construct($cx,$cy,$r,$f,$sc,$sw)
    {
        $this->xpos=$cx;
        $this->ypos=$cy;
        $this->radius=$r;
        $this->fill=$f;
        $this->stroke=$sc;
        $this->strWidth=$sw;   
    }
    
    /* None of this batch of methods are used by the circle leaf */
    /* However in order to correctly implement the interface */
    /* you need some kind of implementation */
    public function add(IComponent $comOn){}
    public function remove(IComponent $comGone){}
    public function getChild($int){}
    protected function getComposite() {}
    
    /* Draw Circle */
    public function draw()
    {
        //echo "<svg height='400' xmlns='http://www.w3.org/2000/svg' version='1.1'>";
        echo "<circle cx='$this->xpos' cy='$this->ypos' r='$this->radius' fill='$this->fill' stroke='$this->stroke' stroke-width='$this->strWidth' />";
        //echo "</svg>";
    }
}
?>