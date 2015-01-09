<?php
//CloneMachine
abstract class CloneMachine
{
	protected $designaiton;
	protected $pix;
	
	public function showHelp($designate)
	{
		$this->designation=$designate;
		
		echo "<img src='ada.png'>";
		echo "<br />$this->designation <p />";
	}
	abstract function __clone();
}
