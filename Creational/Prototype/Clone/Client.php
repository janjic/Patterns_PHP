<?php
include_once('Agency.php');
class Client
{
	public function __construct()
	{
		$debugger= new Agency();
		$debugger->showHelp("Meet the Original Debugger");

		$moreHelp= clone $debugger;
		$moreHelp->showHelp("A cloned debugger!");
	}
}
$client=new Client();