<?php
class Leaf extends Component
{
    private $sName;
    
    public function __construct($sNodeName)
    {
        $this->sName=$sNodeName;
    }
    
    public function add(Component $comOn){ /*Leaf does not need */ }
    public function remove(Component $comGone){ /*Leaf does not need */ }
    public function getChild($someInt){ /*Leaf does not need */ }
    
    public function operation()
    {
        echo $this->sName . "<br />";
    }
}
?>