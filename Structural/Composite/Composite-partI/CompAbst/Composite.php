<?php
class Composite extends Component
{
    private $sName;
    private $aChildren;
    
    public function __construct($sNodeName)
    {
        $this->sName=$sNodeName;
        $this->aChildren=array();
    }
    
    public function add(Component $comOn)
    {
        array_push($this->aChildren,$comOn);
    }
    
    public function remove(Component $comGone)
    {
        //Reserved for code to remove component
    }
    
    public function getChild($someInt)
    {
        //Reserved for code to get child elements
    }
    
    //Note: The following is a recursive operation
    public function operation()
    {
        echo $this->sName . "<br />";
        foreach($this->aChildren as $elVal)
        {
            $elVal->operation();
        }
    }
}
?>