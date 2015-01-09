<?php
class Composite extends IComponent
{
    private $artWork;
    
    public function __construct()
    { 
        
        $this->artWork=array();
    }
    
    public function add(IComponent $comOn)
    {
        array_push($this->artWork,$comOn);
        $comOn->setParent($this);
    }
    
    public function remove(IComponent $comGone)
    {
        if($comGone === $this)
        {
            for($countA = 0; $countA < count($this->artWork); $countA++)
            {
                $this->safeRemove($this->artWork[$countA]);
            }
            $this->artWork= array();
            $this->removeParentRef();
        }
        else
        {
            for($countB = 0; $countB < count($this->artWork); $countB++)
            {
                if($this->artWork[$countB] == $comGone)
                {
                    $this->safeRemove($this->artWork[$countB]);
                    array_splice($this->artWork, $countB, 1);
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
    
    protected function getComposite()
    {
        return $this;
    }
    
    public function getChild($int)
    {
        if(($int > 0) && ($int <= count($this->artWork)))
        {
            return $this->artWork[$int-1];
        }
        else
        {
            return null;
        }   
    }
    
    //Note: The following method is recursive
    public function draw()
    {
        echo "<!doctype html><html><head>";
        echo "<link rel='stylesheet' href='composite.css'>";
        echo "<meta charset='UTF-8'></head><body>";
        echo "<svg width='60%' height='25%' xmlns='http://www.w3.org/2000/svg' version='1.1'>";
        foreach($this->artWork as $elVal)
        {
            $elVal->draw();
        }
        echo "</svg>";
        echo "</body></html>";
    }
}
?>