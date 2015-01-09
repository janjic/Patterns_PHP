<?php
class CleanupAdapter implements IDataEntry
{
   private $cleanData;
   public function __construct(ICleanData $cleanup)
   {
        $this->cleanData=$cleanup;
    }
    
    function getData()
    {
        $this->cleanData->prepareData();
    }
        
    function insertData()
    {
        $this->cleanData->insertData();
    }
}