<?php
class Leafr1c3 implements IComponent
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
        echo "<img src='images/r1c3.png' alt='r1c3'><br />";
    }
}
?>