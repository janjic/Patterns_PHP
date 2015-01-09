<?php
ERROR_REPORTING( E_ALL | E_STRICT );
ini_set("display_errors", 1);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
//Engine is a Client class
class Engine
{
    private $rootCompos;
    
    /* Parameters and color scheme
    Circle:$cx,$cy,$r,$f (color),$sc(color),$sw
    Rectangle:$rx,$ry,$rw,$rh,$f(color),$sc(color),$sw
    Line: $x1,$y1,$x2,$y2,$sc (color),$sw
    Text:$tx,$ty,$ff (font family),$fs (font size),$fclr (color),$msg
    
    6AA3D8 (lt med blue) 526F8F (blue grey) F26E24 (bright burnt orange)
    CFD7D9 (cement gray) 0B0B0D (close to black)*/
    
    public function __construct()
    {
        //Create 2 Composites and 3 Shapes using getChild()
        $this->rootCompos=new Composite();       
        $this->rootCompos->add(new Composite());
        $this->rootCompos->getChild(1)->add(new Line(78,208,134,138,'#526fbf',14));
        $this->rootCompos->getChild(1)->add(new Circle((130),85,16,'#6AA3D8','#0B0B0D',1));
        $this->rootCompos->getChild(1)->add(new Rectangle(221,28,24,42,'#CFD7D9','#0B0B0D',1));
        $this->rootCompos->getChild(1)->add(new Rectangle(128,68,209,77,'#F26E24','none','none'));
        $this->rootCompos->getChild(1)->add(new Rectangle(128,145,281,24,'#0B0B0D','none','none'));
        $this->rootCompos->getChild(1)->add(new Rectangle(337,20,72,129,'#6AA3D8','none','none'));
        $this->rootCompos->getChild(1)->add(new Rectangle(327,6,92,14,'#0B0B0D','none','none'));
        $this->rootCompos->getChild(1)->add(new Rectangle(128,0,42,68,'#0B0B0D','none','none'));
        $this->rootCompos->getChild(1)->add(new Circle(168,168,40,'#CFD7D9','#526F8F',5));
        $this->rootCompos->getChild(1)->add(new Circle(338,168,40,'#CFD7D9','#526F8F',5));
        $this->rootCompos->getChild(1)->add(new Circle(168,168,10,'#F26E24','none','none'));
        $this->rootCompos->getChild(1)->add(new Circle(340,168,10,'#F26E24','none','none'));
        $this->rootCompos->getChild(1)->add(new Circle(373,50,16,'#0B0B0D','none','none'));
        $this->rootCompos->getChild(1)->add(new Line(3,210,500,210,'#0B0B0D',4));
        $this->rootCompos->getChild(1)->add(new Text(138,110,'Arial Black','16','#0B0B0D','Composite Zephyr #1'));
        
        $this->rootCompos->add(new Composite());
        $this->rootCompos->getChild(2)->add(new Line(78,208,134,138,'#0B0B0D',14));
        $this->rootCompos->getChild(2)->add(new Circle((130),85,16,'#CFD7D9','#0B0B0D',1));
        $this->rootCompos->getChild(2)->add(new Rectangle(221,28,24,42,'#CFD7D9','#0B0B0D',1));
        $this->rootCompos->getChild(2)->add(new Rectangle(128,68,209,77,'#6AA3D8','none','none'));
        $this->rootCompos->getChild(2)->add(new Rectangle(128,145,281,24,'#0B0B0D','none','none'));
        $this->rootCompos->getChild(2)->add(new Rectangle(337,20,72,129,'#F26E24','none','none'));
        $this->rootCompos->getChild(2)->add(new Rectangle(327,6,92,14,'#0B0B0D','none','none'));
        $this->rootCompos->getChild(2)->add(new Rectangle(128,0,42,68,'#0B0B0D','none','none'));
        $this->rootCompos->getChild(2)->add(new Circle(168,168,40,'#CFD7D9','#526F8F',5));
        $this->rootCompos->getChild(2)->add(new Circle(338,168,40,'#CFD7D9','#526F8F',5));
        $this->rootCompos->getChild(2)->add(new Circle(168,168,10,'#F26E24','none','none'));
        $this->rootCompos->getChild(2)->add(new Circle(340,168,10,'#F26E24','none','none'));
        $this->rootCompos->getChild(2)->add(new Circle(373,50,16,'#0B0B0D','none','none'));
        $this->rootCompos->getChild(2)->add(new Line(3,210,500,210,'#0B0B0D',4));
        $this->rootCompos->getChild(2)->add(new Text(138,110,'Arial Black','16','#0B0B0D','Composite Zephyr #2'));
        
        $this->rootCompos->draw();

    }
}
$worker=new Engine();
?>