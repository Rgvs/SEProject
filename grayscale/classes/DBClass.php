
<?php

//Connecting to MySQL database
//Use functions query, select and quote functions as and when needed
class DBClass 
{

	protected static $connection;

//Return mysqli object on success, false on failure
	public function connect()
    {
		if(!isset(self::$connection)) 
		{
			$config = parse_ini_file('./config.ini');
			self::$connection = new mysqli($config['host'],$config['username'],$config['password'],$config['dbname']);
		}
		if(self::$connection === false) 
		{
			return false;
		}
		return self::$connection;
	}

//Return mysqli_result object on success, false on failure
	public function query1($query) 
	{
		$con = $this -> connect();
		if($con===false)
			die("Couldn't connect to database");
		//echo "die";
		$result = $con -> query($query);
		
		return $result;
	}
	
//Return associative array of rows on success, false on failure
	public function select($query) 
	{
		$rows = array();
		//echo "rahul123";
		$result = $this -> query1($query);
		if($result == false) {
			return false;
		}
		//else echo "rahul";
		//echo "result";
		while ($row = $result -> fetch_assoc()) 
		{
			//echo "result";
			$rows[] = $row;
		}
		//echo "rahul";
		return $rows;
	}	
	
//Return last error from daatbase as string	
	public function error() 
	{
		$con = $this -> connect();
		return $con -> error;
	}
	
//Create a legal SQL string for use in an SQL statement; Return the escaped string	
	public function quote($value) {
		$connection = $this -> connect();
		return "'" . $connection -> real_escape_string($value) . "'";
	}	

}

?>
