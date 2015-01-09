<?php
class PlainDataEntry implements IDataEntry
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
    
    function getData()
    {
        $this->cusname = $_POST['cusName'];
        $this->cusemail = $_POST['cusEmail'];
        $this->cusurl = $_POST['cusUrl'];
    }
    
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