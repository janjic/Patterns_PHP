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
    
    public function __construct()
    {
        $this->rootCompos = new Composite("Root");
        $n1=new Composite("-Composite 1");
        $n1->add(new Leaf("--C1:leaf 1"));
        $n1->add(new Leaf("--C1:leaf 2"));
        $this->rootCompos->add($n1);
        
        $n2=new Composite("-Composite 2");
        $n2->add(new Leaf("--C2:leaf 3"));
        $n2->add(new Leaf("--C2:leaf 4"));
        $n2->add(new Leaf("--C2:leaf 5"));
        $this->rootCompos->add($n2);
        
        $this->rootCompos->add(new Leaf("R:leaf 6"));
        
        //Create a node
        $this->rootCompos->operation();
    }
}
$worker=new Client();
?>