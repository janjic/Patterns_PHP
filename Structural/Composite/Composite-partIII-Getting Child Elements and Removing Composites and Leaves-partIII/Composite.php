<?php
class Composite extends IComponent
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
        $comOn->setParent($this);
    }
    
    public function remove(IComponent $comGone)
    {
        if($comGone === $this)
        {
            for($countA = 0; $countA < count($this->aChildren); $countA++)
            {
                $this->safeRemove($this->aChildren[$countA]);
            }
            $this->aChildren= array();
            $this->removeParentRef();
        }
        else
        {
            for($countB = 0; $countB < count($this->aChildren); $countB++)
            {
                if($this->aChildren[$countB] == $comGone)
                {
                    $this->safeRemove($this->aChildren[$countB]);
                    array_splice($this->aChildren, $countB, 1);
                }
            }
        }    
    }
    
    private function safeRemove(IComponent $safeCom)
    {
        if($safeCom->getComposite())
        {
            $safeCom->remove($safeCom);
        }
        else
        {
            $safeCom->removeParentRef();
        }
    }
    
    public function getChild($int)
    {
        if(($int > 0) && ($int <= count($this->aChildren)))
        {
            return $this->aChildren[$int-1];
        }
        else
        {
            return null;
        }   
    }
    
    protected function getComposite()
    {
        return $this;
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