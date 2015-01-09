<?php
ERROR_REPORTING( E_ALL | E_STRICT );
ini_set("display_errors", 1);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
class Client
{
    private $rootCompos;
    private $aloneLeaf;
    
    public function __construct()
    {
        $this->rootCompos=new Composite("Root");       
        $this->rootCompos->add(new Composite("-Composite 1"));
        $this->rootCompos->getChild(1)->add(new Leaf("--C1:leaf 1"));
        $this->rootCompos->getChild(1)->add(new Leaf("--C1:leaf 2"));
        
        $this->rootCompos->add(new Composite("-Composite 2"));
        $this->rootCompos->getChild(2)->add(new Leaf("--C2:leaf 3"));
        $this->rootCompos->getChild(2)->add(new Leaf("--C2:leaf 4"));
        $this->rootCompos->getChild(2)->add(new Leaf("--C2:leaf 5"));
        
        $this->rootCompos->add(new Composite("-Composite 3"));
        $this->rootCompos->getChild(3)->add(new Leaf("--C3:leaf 6"));
        $this->rootCompos->getChild(3)->add(new Leaf("--C3:leaf 7"));
        $this->rootCompos->getChild(3)->add(new Leaf("--C3:leaf 8"));
        
        $this->aloneLeaf=new Leaf("<br />--All alone");
        $this->rootCompos->add($this->aloneLeaf);
        //Show all components and leaves
        $this->rootCompos->operation();
        
        //Get this Parent of Leaf 5
        $leaf5=$this->rootCompos->getChild(2)->getChild(3);
        $leaf5parent=$leaf5->getParent();
        echo "<br />Leaf 5 parent operation below this line <br />";  
        //Run operation on Leaf5's Parent
        $leaf5parent->operation();
        echo "Leaf 5 parent operation above this line <br />";
        
        //Remove a Composite
        $this->rootCompos->remove($this->rootCompos->getChild(3));
        //Remove a single leaf
        echo "<br />Removed Composite 3, the first leaf from Composite 2 <br />";
        echo "and 'All alone leaf' <br />";
        //Method 1 using getChild()
        $com2=$this->rootCompos->getChild(2);
        $com2->remove($com2->getChild(1));
        //Method 2 using leaf name
        $this->rootCompos->remove($this->aloneLeaf);
        $this->rootCompos->operation();   
    }
}
$worker=new Client();
?>