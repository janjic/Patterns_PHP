<?php

	ini_set("display_errors","2");
	ERROR_REPORTING(E_ALL);
	
	$server="localhost";
	$user="bill";
	$pass="billz";
	$currentDB="phpwork";
	$tableMaster="phpGroup";
	
	$hookup=new mysqli($server, $user, $pass, $currentDB);
	
	if (mysqli_connect_error()) 
	{
    	die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
	}
	
	$uname=$_POST['uname'];
	$expert=$_POST['expert'];
	$place=$_POST['place'];
	$pix=$_POST['pix'];
		
//Create Query Statement

	$sql = "INSERT INTO $tableMaster (gname,gexpert,gplace,gpix) VALUES ('$uname','$expert','$place','$pix')";
	//%s is a string from parameter
	if($hookup->query($sql))
	{
		printf("User name: %s <br/> Expertise: %s <br/> From: %s. <br/> Has been added to table: %s",$uname,$expert,$place,$tableMaster);
	}
	
	elseif ( ($result = $hookup->query($sql))===false )
	{
  		printf("Invalid query: %s <br/> Whole query: %s <br/>", $hookup->error, $sql);
  		exit();
	}

	$hookup->close();
?>