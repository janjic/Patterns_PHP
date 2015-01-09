<?php
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 1);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
class BridgeClient
{
    private static $pageDevice;
    private static $device;
    //client request
    public static function request()
    {
      self::$device=$_POST['device'];
      self::$pageDevice=new StandardPage();
      self::$pageDevice->doDevice(new self::$device());
    } 
}
BridgeClient::request();

