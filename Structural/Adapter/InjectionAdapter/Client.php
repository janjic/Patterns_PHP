<?php
function __autoload($class_name) 
{
    include $class_name . '.php';
}
class Client
{
   private $cleanData;
   private $adaptData;
   
   public function __construct()
   {
      $this->cleanData=new CleanDataEntry();
      $this->adaptData=new CleanupAdapter($this->cleanData);
      $this->adaptData->getData();
      $this->adaptData->insertData(); 
   }
}
$worker=new Client();
?>