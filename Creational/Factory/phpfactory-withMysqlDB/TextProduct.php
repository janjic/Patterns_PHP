<?php

class TextProduct extends Product
{
	public function getData()
	{
		$hookup=new mysqli($this->server, $this->user, $this->pass, $this->currentDB);
	
		if (mysqli_connect_error()) 
		{
    		die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
		}

		//Create Query Statement
		$sql ="SELECT gname, gexpert, gplace FROM $this->tableMaster";
	
		if ($result = $hookup->query($sql))
		{
			$textPack = "<html>";
			$textPack .= "<head>";
			$textPack .= '<link rel="stylesheet" type="text/css" href="phpGroup.css" />';
			$textPack .= "</head>";
			$textPack .= "<body>";
			$textPack .= "<h1>Member Vital Statistics</h1>";
			$textPack .= "<h2>This information is from the Adobe Vaults</h2>";
			
			while($row=$result->fetch_assoc())
			{
				$textPack .= $row['gname'] . " is a " . $row['gexpert'] . " expert from " . $row['gplace'] . "<br />";
			}

    		$textPack .= "<p/>";
			$textPack .= "Database returned $result->num_rows rows.<p />";
			$textPack .= "<p/><a href='Request.html'>&nbsp;Back to request page&nbsp;</a>";
			$textPack .= "</body>";
			$textPack .= "</html>";
    		$result->close();
			return $textPack;
		}

		$hookup->close();	
	}
}
?>