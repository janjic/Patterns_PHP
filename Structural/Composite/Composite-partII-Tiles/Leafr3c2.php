<?php
class Leafr3c2 implements IComponent
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
        echo "<img src='images/r3c2.png' alt='r3c2'>";
    }
}
?>