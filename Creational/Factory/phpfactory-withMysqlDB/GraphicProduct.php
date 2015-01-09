<?php

class GraphicProduct extends Product
{
	private $image;
	private $row;
	private $graphicPack;
	
	public function getData()
	{
		$hookup=new mysqli($this->server, $this->user, $this->pass, $this->currentDB);
	
		if (mysqli_connect_error()) 
		{
    		die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
		}

		//Create Query Statement
		$sql ="SELECT gpix FROM $this->tableMaster";
	
		if ($result = $hookup->query($sql))
		{
			$this->graphicPack = "<html>";
			$this->graphicPack .= "<head>";
			$this->graphicPack .= '<link rel="stylesheet" type="text/css" href="phpGroup.css" />';
			$this->graphicPack .= "</head>";
			$this->graphicPack .= "<body>";
			$this->graphicPack .= "<h1>Member Photos</h1>";
			$this->graphicPack .= "<h2>These photos are stored in MySQL Database</h2>";
			$counter=0;
			$this->graphicPack .= '<div id="graphicDisplay">';
			while($this->row=$result->fetch_assoc())
			{	
				$counter++;
				if($counter===6)
				{
					$counter=1;
					$this->graphicPack .= "</div><p/><div id='graphicDisplay'>";
				}
				$this->setAside();
			}
			$this->graphicPack .= '</div>';
			$this->graphicPack .= "<p/><a href='Request.html'>&nbsp;Back to request page&nbsp;</a>";
			$this->graphicPack .= "</body>";
			$this->graphicPack .= "</html>";
    		$result->close();
			return $this->graphicPack;
		}
	}
	
	private function setAside()
	{
		$this->image=$this->row['gpix'];
		$this->graphicPack .='<aside>';
    	$this->graphicPack .= "<figure> <img src='images/$this->image'/><br/>";
		$this->image=substr($this->image, 0, -4);
		$this->image=ucfirst($this->image);
      	$this->graphicPack .= "<figcaption>$this->image</figcaption>";
    	$this->graphicPack .= '</figure>';
  		$this->graphicPack .= '</aside >';				
	}	
}
?>