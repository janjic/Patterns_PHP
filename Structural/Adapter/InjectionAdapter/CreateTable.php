<?php
//ini_set("display_errors","1");
//ERROR_REPORTING( E_ALL | E_STRICT );
class CreateTable
{
	private $tableMaster;
	private $hookup;
	
	public function __construct()
	{
		$this->tableMaster="injectAdapt";
		$this->hookup=UniversalConnect::doConnect();
	
		$drop = "DROP TABLE IF EXISTS $this->tableMaster";
	
		if($this->hookup->query($drop) === true)
		{
			printf("Old table %s has been dropped.<br/>",$this->tableMaster);
		}

		$sql = "CREATE TABLE $this->tableMaster (
			id SERIAL,
			cusname NVARCHAR(25),
			cusemail NVARCHAR(40),
			cusurl NVARCHAR(40),
			PRIMARY KEY (id))";
	
		if($this->hookup->query($sql) === true)
		{
			printf("Table $this->tableMaster has been created successfully.<br/>");
		}
		$this->hookup->close();
	}
}
$worker=new CreateTable();
?>
