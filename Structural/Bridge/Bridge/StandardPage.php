<?php
class StandardPage extends IPage 
{    
    public function doDevice(IDevice $deviceNow)
    {
        $this->deviceSelected=$deviceNow;
        $this->setPage();
        $this->buildPage();
    }
    
    private function setPage()
    {
        $this->header="Future Bridge";
        $this->graphic="airbridge.gif";
        $this->body="Hop on, and we'll be over this bridge in no time!";
    }
}
?>