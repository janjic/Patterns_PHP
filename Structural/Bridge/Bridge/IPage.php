<?php
abstract class IPage 
{
    //Low-level
    abstract function doDevice(IDevice $deviceNow);
    //High-level
    protected function buildPage()
    {
        echo $this->deviceSelected->buildDevice($this->header,$this->graphic,$this->body);
    }
    //Properties
    protected $header, $graphic, $body, $deviceSelected;
}
?>

