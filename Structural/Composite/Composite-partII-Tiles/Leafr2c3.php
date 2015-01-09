<?php
class Leafr2c3 implements IComponent
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
        echo "<img src='images/r2c3.png' alt='r2c3'><br />";
    }
}
?>