<?php
class Composite implements IComponent
{
    private $mosaic;
    
    public function __construct()
    { 
        $this->mosaic=array();
    }
    
    public function add(IComponent $comOn)
    {
        array_push($this->mosaic,$comOn);
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
    public function showPix()
    {
        foreach($this->mosaic as $tile)
        {
            $tile->showPix();
        }
    }
}
?>