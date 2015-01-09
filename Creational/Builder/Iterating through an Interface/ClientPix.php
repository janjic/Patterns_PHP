<?php
//ClientPix.php
ERROR_REPORTING( E_ALL | E_STRICT );
ini_set("display_errors", 1);
function __autoload($class_name)
{
    include $class_name . '.php';
}
class ClientPix
{
    private $director;
    private $media;
    private $productNow;
    public function __construct()
    {
        $this->media=new BuildPix();
        $this->director=new Director();
        $this->goMedia();
    }

    private function goMedia()
    {
        $this->director->doBuild($this->media);
        $this->productNow=$this->media->getResult();
        $this->productNow->display();
    }
}
$worker=new ClientPix();