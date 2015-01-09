<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
include_once('Client.php');
$client=new Client();
$client->displayGraphics();
?>