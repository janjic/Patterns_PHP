<?php
	ini_set("display_errors","2");
	ERROR_REPORTING(E_ALL);
	$server="localhost";
	$user="bill";
	$pass="billz";
	$currentDB="phpwork";
	$tableMaster="phpGroup";
	
	print phpversion() . "<br />";

	$hookup=new mysqli($server, $user, $pass, $currentDB);
	
	if (mysqli_connect_error()) 
	{
    	die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
	}
	
	$drop = "DROP TABLE IF EXISTS $tableMaster";
	
	if($hookup->query($drop) === true)
	{
		printf("Old table $tableMaster has been dropped.<br/>");
	}

	$sql = "CREATE TABLE $tableMaster (gname nvarchar(30), gexpert nvarchar(40) , gplace nvarchar(40), gpix nvarchar(40))";
	
	if($hookup->query($sql) === true)
	{
		printf("Table $tableMaster has been created successfully.<br/>");
	}

$hookup->close();
