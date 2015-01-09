<?php
//Lawman.php
include_once('IWestLaw.php');
class Lawman extends IWestLaw
{
	const LAWSIDE="Lawman";
	
	public function setPlace($where)
	{
		$this->location=$where;
	}
	
	public function getPlace()
	{
		return $this->location;
	}
	function __clone(){}	
	
}
?>