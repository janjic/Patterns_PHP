<?php
//Filename: IConnectInfo.php
interface IConnectInfo
{
	const HOST ="yourHost";
	const UNAME ="yourUname";
	const PW ="yourPassword";
	const DBNAME = "yourDatabase";
	
	public static function doConnect();
}

?>
