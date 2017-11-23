<?php
//Session start
//Object
class Connection {
	public $con;	
	//Constructor
	public function __construct() {
		$mysql_hostname = "localhost"; 			//Address Host 
		$mysql_user = "root";  					//Username database
		$mysql_password = "";					//Password database
		$mysql_database = "ass2_ltw"; 			//Database's name
		$this->con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");	
	}
	//Close connection
	public function disconnect() {
		$this->con->close();
	}
	
} //End Object

//////////////Running/////////
//$GLOBALS['connection'] = new Connection();


?>