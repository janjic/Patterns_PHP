<?php
abstract class IComponent
{
    protected $parentNode;

    abstract function draw();
    abstract function add(IComponent $comOn);
    abstract function remove(IComponent $comGone);
    abstract function getChild($int);
    protected abstract function getComposite();
    
    protected function setParent(IComponent $compositeNode)
    {
        $this->parentNode=$compositeNode;
    }
    
    public function getParent()
    {
        return $this->parentNode;
    }
    
    protected function removeParentRef()
    {
        $this->parentNode=null;
    }
}
?> 