<?php
ini_set('display_errors','On');
class dbdb
{
	private $connection;
	private $selectd;
	private $lastQuery;
	private $db_host;
 	private $db_username;
	private $db_pass;
	private $db_name;

	function __construct()
	{
	$this->db_host = 'localhost';  
// 	$this->db_username = 'root';
//	$this->db_pass = 'tiger';
	$this->db_username = 'yousef';
	$this->db_pass = 'se1U$aemp4&AtIcHR!lx';
	$this->db_name = 'webmentordb'; 
	}
	
	function __destruct()
	{
		
	}

	public function connect() {
		try 
		{
				$this->connection = mysql_connect($this->db_host, $this->db_username, $this->db_pass);
				$this->selectd = mysql_select_db($this->db_name,$this->connection);
				return $this->selectd;
		}
		catch(exception $e)
		{
			return $e;
		}
	}
	
		
	public function printt()
		{
		echo $this->connection;
		}

	public function closeConnection()
	{
		
		$a = mysql_close($this->connection);
		return $a;
	}
	
	public function query($query)
	{
		$result=mysql_query($query);
		return $result;
	}
	
	public function pingServer()
	{
		try
		{
				if(!mysql_ping($this->connection))
				{
					return false;
				}
				else
				{
					return true;
					//print "hi";
				}
		}
		catch(exception $e)
		{
			return $e;
		}
	}
}

// $aa= new dbdb();
// $aa->connect();
// $aa->pingServer();
?>