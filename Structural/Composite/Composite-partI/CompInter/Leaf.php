<?php
class Leaf implements IComponent
{
    private $sName;
    
    public function __construct($sNodeName)
    {
        $this->sName=$sNodeName;
    }
    
    /* None of this batch of methods are used by Leaf */
    /* However in order to correctly implement the interface */
    /* you need some kind of implementation */
    public function add(IComponent $comOn){}
    public function remove(IComponent $comGone){}
    public function getChild($someInt){}
    
    /* Some userful content is required for the operation */
    public function operation()
    {
        echo "<!doctype html><html><head>";
        echo "<link rel='stylesheet' href='composite.css'>";
        echo "<meta charset='UTF-8'></head><body>";

        echo "<div class='leaf'> $this->sName </div>";
        echo "</body></html>";
    }
}
?>