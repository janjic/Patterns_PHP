<?php
//Client.php
function __autoload($class_name) 
{
    include $class_name . '.php';
}
class Client
{
    private $sheriff;
    private $desperado;
    public function __construct()
    {
	 $this->sheriff=new Lawman();
	 $this->desperado=new Outlaw();
	 echo '<!DOCTYPE html><html><head>';
	 echo "<link rel='stylesheet' type='text/css' href='ok.css'>";
	 echo "<h1> Outlaws and Lawmen of the Old West</h1>";
	 
	 $laura = clone $this->desperado;
	 $laura->setPoster("LauraBullion");
	 $laura->setSobriquet("Laura Bullion<br />");
	 $laura->setPlace("Texas");
	 $laura->setCrime("Train Robbery");
	 echo "<table><tr><td>";
	 echo "<img src={$laura->getPic()}><br />";
	 echo $laura->getSobriquet();
	 echo  $laura->getPlace() . ": " . $laura::LAWSIDE . " <br />";
	 echo $laura->getCrime();
	 echo "</td><td>";
	 
	 $bob = clone $this->desperado;
	 $bob->setPoster("younger");
	 $bob->setSobriquet("Bob Younger<br />");
	 $bob->setPlace("Missouri");
	 $bob->setCrime("Bank Robbery");
	 echo "<td>";
	 echo "<img src={$bob->getPic()}><br />";
	 echo $bob->getSobriquet();
	 echo $bob->getPlace() . ": " . $bob::LAWSIDE . " <br />";
	 echo $bob->getCrime();
	 echo "</td><td>";
	 
	 $pearl = clone $this->desperado;
	 $pearl->setPoster("PearlHart");
	 $pearl->setSobriquet("Pearl Hart<br />");
	 $pearl->setPlace("Arizona");
	 $pearl->setCrime("Stage Robbery");
	 echo "<td>";
	 echo "<img src={$pearl->getPic()}><br />";
	 echo $pearl->getSobriquet();
	 echo  $pearl->getPlace() . ": " . $pearl::LAWSIDE . " <br />";
	 echo $pearl->getCrime();
	 echo "</td></tr>";
	 
	 $wyatt = clone $this->sheriff;
	 $wyatt->setPoster("wyatt");
	 $wyatt->setSobriquet("Wyatt Earp<br />");
	 $wyatt->setPlace("Arizona");
	 echo "<td>";
	 echo "<img src={$wyatt->getPic()}><br />";
	 echo $wyatt->getSobriquet();
	 echo  $wyatt->getPlace() . ": " . $wyatt::LAWSIDE . " <br />";
	 echo "</td><td>";
	 $bill = clone $this->sheriff;
	 $bill->setPoster("wildbill");
	 $bill->setSobriquet("Wild Bill Hickcock<br />");
	 $bill->setPlace("Dakota Ter.");
	 echo "<td>";
	 echo "<img src={$bill->getPic()}><br />";
	 echo $bill->getSobriquet();
	 echo  $bill->getPlace() . ": " . $bill::LAWSIDE . " <br />";
	 echo "</td></tr></table>";
	 echo "</body></html>";
    }
}
$worker=new Client();
?>