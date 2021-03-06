
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
	public function query($query) 
	{
		$con = $this -> connect();
		if($con===false)
			die("Couldn't connect to database");
		$result = $con -> query($query);
		return $result;
	}
	
//Return associative array of rows on success, false on failure
	public function select($query) 
	{
		$rows = array();
		$result = $this -> query($query);
		if($result === false) {
			return false;
		}
		while ($row = $result -> fetch_assoc()) 
		{
			$rows[] = $row;
		}
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