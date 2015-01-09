<?php

abstract class Product
{
	protected $server="localhost";
	protected $user="bill";
	protected $pass="billz";
	protected $currentDB="phpwork";
	protected $tableMaster="phpGroup";
	
	abstract public function getData();
}