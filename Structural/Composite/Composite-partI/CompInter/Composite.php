<?php
class Composite implements IComponent
{
    private $sName;
    private $aChildren;
    
    public function __construct($sNodeName)
    { 
        $this->sName=$sNodeName;
        $this->aChildren=array();
    }
    
    public function add(IComponent $comOn)
    {
        array_push($this->aChildren,$comOn);
    }
    
    public function remove(IComponent $comGone)
    {
        //Code to remove component
    }
    
    public function getChild($someInt)
    {
        //Code to get child by element value
    }
    
    //Note: The following method is recursive
    public function operation()
    {
        echo "<!doctype html><html><head>";
        echo "<link rel='stylesheet' href='composite.css'>";
        echo "<meta charset='UTF-8'></head><body>";
        echo "<div class='composite'> $this->sName </div>";
        echo "</body></html>";
        
        foreach($this->aChildren as $elVal)
        {
            $elVal->operation();
        }
    }
}
?>