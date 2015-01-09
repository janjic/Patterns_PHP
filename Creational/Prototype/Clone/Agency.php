<?php
//Agency.php
include_once('CloneMachine.php');
class Agency extends CloneMachine
{
	function __construct()
	{
		echo "This message only appears in the original!<br />";
	}
	function __clone() {}
}