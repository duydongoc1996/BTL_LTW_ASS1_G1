<?php
include_once 'connect.php';
//User object
class User {
	public $id;
	public $username;
	public $password;
	public $email;
	public $session;
	public $firstname;
	public $lastname;

	//public $connection;

	public function __construct($ID,$USERNAME,$PASSWORD,$EMAIL,$SESSION,$FIRSTNAME,$LASTNAME) {
		$this->id=$ID;
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
	

	public function changeInfo($ID,$USERNAME,$PASSWORD,$EMAIL,$FIRSTNAME,$LASTNAME) {
		//database working
		$connection = new Connection();
		
		$sql = "UPDATE `user` SET
			`username`='$USERNAME',
			`password`='$PASSWORD',
			`email`='$EMAIL',
			`firstname`='$FIRSTNAME',
			`lastname`='$LASTNAME'
		WHERE `id`='$ID' ";
		
		if (mysqli_query($connection->con, $sql)===true) {
			//echo "New record updated successfully";
			return true;
		} else {
			//echo "Error: " . $sql . "<br>" . mysqli_error($connection->con);
			return false;
		}
		
	}

	public function changePass($ID,$PASSWORD) {
		//database working
		$connection = new Connection();
		
		$sql = "UPDATE `user` SET
			`password`='$PASSWORD'
		WHERE `id`='$ID' ";
		
		if (mysqli_query($connection->con, $sql)===true) {
			//echo "New record updated successfully";
			return true;
		} else {
			//echo "Error: " . $sql . "<br>" . mysqli_error($connection->con);
			return false;
		}
		
	}

public function changePrivate($ID,$EMAIL,$FIRSTNAME,$LASTNAME) {
		//database working
		$connection = new Connection();
		
		$sql = "UPDATE `user` SET
			`email`='$EMAIL',
			`firstname`='$FIRSTNAME',
			`lastname`='$LASTNAME'
		WHERE `id`='$ID' ";
		
		if (mysqli_query($connection->con, $sql)===true) {
			//echo "New record updated successfully";
			return true;
		} else {
			//echo "Error: " . $sql . "<br>" . mysqli_error($connection->con);
			return false;
		}
		
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
	public function getUser($username,$password) {
		//database working
		$connection = new Connection();

		$sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
		$result = $connection->con->query($sql);	

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $user = new User($row['id'],$row['username'],$row['password'],$row['email'],$row['session'],$row['firstname'],$row['lastname']);
		        $_SESSION['id'] = $row['id'];
		        $GLOBALS['gl'] = $row['id'];
		       	//$this->addUser($user);
		    }
		    return $user;
		} else {
		    //echo "0 results";
		    return false;
		}
	}


	public function getAdmin($username, $password) {

		if ($username == 'admin' && $password == '123456') return true;
		else if ($username == 'ad' && $password == '123456') return true;		
		else
			 return false;
		 
	}


	public function getUserById($id) {
		//database working
		$connection = new Connection();

		$sql = "SELECT * FROM `user` WHERE `id`='$id'";
		$result = $connection->con->query($sql);	

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $user = new User($row['id'],$row['username'],$row['password'],$row['email'],$row['session'],$row['firstname'],$row['lastname']);
		       	//$this->addUser($user);
		    }
		    return $user;
		} else {
		    //echo "0 results";
		    return false;
		}
	}


	public function getAllUser() {
		//database working
		$connection = new Connection();

		$sql = "SELECT * FROM user";
		$result = $connection->con->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $user = new User($row['id'],$row['username'],$row['password'],$row['email'],$row['session'],$row['firstname'],$row['lastname']);
		       	$this->addUser($user);


		    }
		} else {
		    //echo "0 results";
		}



		return $this->listUser;
	}	

	public function deleteUser($id) {
		//database working
		$connection = new Connection();

		$sql = "DELETE FROM `user` WHERE `id`='$id'";		
		if (mysqli_query($connection->con, $sql)===true) {
			//echo "Delete record successfully";
			$index=0;
			foreach ($this->listUser as $user) {
				# code...				
				if ($user->id == $id) {
					$this->delUser($index);	
					break;
				}
				$index += 1;
			}
			return true;
		} else {
			//echo "Error: " . $sql . "<br>" . mysqli_error($connection->con);
			return false;
		}
		
	}


}



//////////////Running/////////
//	$UserManager = new UserManager();
//	$listUser = $UserManager->getAllUser();


?>