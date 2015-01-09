<?php
class Recursion
{
    //The Recursion class is the Client
    //in making a request from the Factory
    private $members;
    private $counter=0;
    private $size;

    public function getPeople()
    {
        //Makes request to Factory child
        $factoryNow=new PeopleFactory();
        $this->getArray($factoryNow);
    }
    
    public function getTools()
    {
        //Makes request to Factory child
        $factoryNow=new ToolFactory();
        $this->getArray($factoryNow);
    }
    
    public function getPets()
    {
        //Makes request to Factory child
        $factoryNow=new PetsFactory();
        $this->getArray($factoryNow);
    }
    
    //By programming to the interface (Factory)
    //you can use different implementations
    private function getArray(Factory $factoryBuild)
    {
        $this->members=$factoryBuild->makeArray();
        $this->size=count($this->members)-1;
        $this->recursive();
    }
    
    private function recursive()
    {  
        if($this->counter <= $this->size)
        {
            echo "<span style='color:white; font-family:Verdana,Arial,Helvetica,sans-serif'>" . $this->members[$this->counter] . "<br /> </span>";
            ++$this->counter;
            return $this->recursive();
        }
    }
}