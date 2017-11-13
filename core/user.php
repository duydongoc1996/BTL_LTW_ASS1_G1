<?php

//User object
class User {
//	public $id;
	public $username;
	public $password;
	public $email;
	public $session;
	public $firstname;
	public $lastname;

	public $connection;

	public function __construct($USERNAME,$PASSWORD,$EMAIL,$SESSION,$FIRSTNAME,$LASTNAME) {
		//$this->id=$ID;
		$this->username=$USERNAME;
		$this->password=$PASSWORD;
		$this->email=$EMAIL;
		$this->session=$SESSION;
		$this->firstname=$FIRSTNAME;
		$this->lastname=$LASTNAME;

	}
	public function insertUser() {
		//var_dump($GLOBALS['connection']);
		$connection = new Connection();

		$sql = "INSERT INTO `user` (`id`, `username`, `password`, `email`, `session`, `firstname`, `lastname`) VALUES (NULL, '$this->username', '$this->password', '$this->email', '0', '$this->firstname', '$this->lastname')";

		if (mysqli_query($connection->con, $sql)===true) {
		    //echo "New record created successfully";
		} else {
		    //echo "Error: " . $sql . "<br>" . mysqli_error($connection->con);
		}
		return $this;
	}

	public function changeInfo($type,$value) {
		//database working
	}
}

class UserManager {
	protected $listUser;

	public function __construct() {
		$this->listUser=array();
	}
	public function addUser($user) {
		//database working
		array_push($this->listUser,$user);
	}
	public function delUser($index) {
		//database working
		array_splice($this->listUser,$index,1);
	}
	public function getAllUser() {
		//database working
		$connection = new Connection();

		$sql = "SELECT * FROM user";
		$result = $connection->con->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $user = new User($row['username'],$row['password'],$row['email'],$row['session'],$row['firstname'],$row['lastname']);
		       	$this->addUser($user);


		    }
		} else {
		    //echo "0 results";
		}



		return $this->listUser;
	}	
}



//////////////Running/////////
//	$UserManager = new UserManager();
//	$listUser = $UserManager->getAllUser();


?>