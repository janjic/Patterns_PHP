<?php
//ClientA.php
ERROR_REPORTING(E_ALL | E_STRICT);
ini_set("display_errors", 1);
function __autoload($class_name)
{
    include $class_name . '.php';
}

class ClientA
{
    private $director;
    private $mobile;
    private $productNow;

    public function __construct()
    {
        $this->mobile = new BuildMobileA();
        $this->director = new Director();
        $this->goMobile();
    }

    private function goMobile()
    {
        $this->director->doBuild($this->mobile);
        $this->productNow = $this->mobile->getResult();
        $this->productNow->display();
    }
}

$worker = new ClientA();
?>