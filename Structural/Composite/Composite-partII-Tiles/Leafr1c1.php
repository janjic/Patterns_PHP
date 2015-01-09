<?php
class Leafr1c1 implements IComponent
{   
    /* None of this batch of methods are used by leaf participants */
    /* However in order to correctly implement the interface */
    /* you need some kind of implementation */
    public function add(IComponent $comOn){}
    public function remove(IComponent $comGone){}
    public function getChild($someInt){}
    
    /* Display tile */
    public function showPix()
    {
        echo "<img src='images/r1c1.png' alt='r1c1'>";
    }
}
?>