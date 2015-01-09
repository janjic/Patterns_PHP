<?php
ERROR_REPORTING( E_ALL | E_STRICT );
ini_set("display_errors", 1);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
class Client
{
    private $bigPicture;
    
    public function __construct()
    {
        $this->bigPicture = new Composite();
        $row1=new Composite();
        $row1->add(new Leafr1c1());
        $row1->add(new Leafr1c2());
        $row1->add(new Leafr1c3());
        $this->bigPicture->add($row1);
        
        $row2=new Composite();
        $row2->add(new Leafr2c1());
        $row2->add(new Leafr2c2());
        $row2->add(new Leafr2c3());
        $this->bigPicture->add($row2);
        
        $row3=new Composite();
        $row3->add(new Leafr3c1());
        $row3->add(new Leafr3c2());
        $row3->add(new Leafr3c3());
        $this->bigPicture->add($row3);
        
        //Create a compostion
        echo "<!doctype html><html><head>";
        echo "<link rel='stylesheet' href='india.css'>";
        echo "<meta charset='UTF-8'></head><body>";
        echo "<h1>Leaders in Composition</h1>";
        echo "<header>India</header>";
        
        $this->bigPicture->showPix();
        
        echo "<figcaption>Mahatma Gandhi</figcaption>";
        echo "</body></html>";
    }
}
$worker=new Client();
?>