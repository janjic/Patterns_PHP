<?php
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 1);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
//Client acts like a client in making a
//request to the Recursion class
Class Client
{
    private $selector;
    private $trigger;
    public function __construct()
    {
        $this->selector=$_POST['group'];
        $this->trigger = new Recursion();
        switch($this->selector)
        {
            case "people":
                $this->trigger->getPeople();
                break;
            case "tools":
                $this->trigger->getTools();
                break;
            case "pets":
                $this->trigger->getPets();       
        }
        
    } 
}
$worker=new Client();

