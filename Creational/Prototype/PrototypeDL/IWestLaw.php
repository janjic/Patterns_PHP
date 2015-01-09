<?php
//IOutlaw.php
abstract class IWestLaw
{
	protected $sobriquet;
	protected $poster;
	protected $location;
	
	//Outlaw or Lawman
	abstract function setPlace($where);
	abstract function getPlace();
	abstract function __clone();
		
	//Sobriquet
	public function setSobriquet($nickname)
	{
		$this->sobriquet=$nickname;
	}
	
	public function getSobriquet()
	{
		return $this->sobriquet;
	}
	
	//Photo
	public function setPoster($ePic)
	{
		$this->poster="posters/" . $ePic . ".png";
	}
	
	public function getPic()
	{
		return $this->poster;
	}
		
}

?>