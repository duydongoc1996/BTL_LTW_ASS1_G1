<?php
include "connect.php";
//User object
class User {
	public $id;
	public $username;
	public $password;
	public $email;
	public $session;
	public $firstname;
	public $lastname;

	public function __construct($ID,$USERNAME,$PASSWORD,$EMAIL,$SESSION,$FIRSTNAME,$LASTNAME) {
		$this->id=$ID;
		$this->username=$USERNAME;
		$this->password=$PASSWORD;
		$this->email=$EMAIL;
		$this->session=$SESSION;
		$this->firstname=$FIRSTNAME;
		$this->lastname=$LASTNAME;
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
		return $this->listUser;
	}	
}
//////////////Running/////////
$UserManager = new UserManager();
$listUser = $UserManager->getAllUser();



?>