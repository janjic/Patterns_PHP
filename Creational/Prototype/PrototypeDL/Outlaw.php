<?php
//Outlaw.php
include_once('IWestLaw.php');
class Outlaw extends IWestLaw
{
	const LAWSIDE="Outlaw";
	private $crime;
	
	public function setPlace($where)
	{
		$this->location=$where;
	}
	
	public function getPlace()
	{
		return $this->location;
	}
	
	public function setCrime($doneWrong)
	{
		$this->crime=$doneWrong;
	}
	
	public function getCrime()
	{
		return $this->crime;
	}
	function __clone(){}	
	
}
?>