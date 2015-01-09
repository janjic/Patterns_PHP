<?php
class CleanDataEntry implements ICleanData
{
    private $cusname;
    private $cusemail;
    private $cusurl;
    private $sql;
    private $tableMaster;
    private $hookup;
    
    public function __construct()
    {
        $this->tableMaster="injectAdapt";
        $this->hookup=UniversalConnect::doConnect();
    }
    
    function prepareData()
    {
        //Protect against injection attack
        $this->cusname =$this->hookup->real_escape_string($_POST['cusName']);
        $this->cusemail =$this->hookup->real_escape_string($_POST['cusEmail']);
        $this->cusurl = $this->hookup->real_escape_string($_POST['cusUrl']);
        
        //Validation of Email format
        if(filter_var($this->cusemail, FILTER_VALIDATE_EMAIL)){
        echo $this->cusemail. " is valid. <br />";
        }
        else
        {
            echo $this->cusemail . " is not a valid email. <br />";
            echo "<a href='AdddData.html'>Re-enter email and try again</a>";
            exit();
        }
        
       //Validation of URL format 
        if(filter_var($this->cusurl, FILTER_VALIDATE_URL)){
        echo $this->cusurl. " is valid. <br />";
        }
        else
        {
            echo $this->cusurl . " is not a valid URL. <br />";
            echo "<a href='AdddData.html'>Re-enter URL and try again</a>";
            exit();
        } 
    }
    
    //All of the cleaned up data can now go into the table
    function insertData()
    {
        $this->sql="INSERT INTO $this->tableMaster (cusname,cusemail,cusurl)VALUES ('$this->cusname','$this->cusemail', '$this->cusurl')";
	$this->hookup->query($this->sql);
	if ($result = $this->hookup->query($this->sql))
	{
            printf("Customer: %s email %s and URL: %s <br/> have been inserted into %s.",$this->cusname,$this->cusemail,$this->cusurl,$this->tableMaster);
	}
        else
        {
            printf("Here's what went wrong: %s\n", $this->hookup->error);
        }
        $this->hookup->close();       
    }
}

?>