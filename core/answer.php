<?php
include_once 'connect.php';
//User object
class Answer {
	public $name;
	public $email;
	public $content;
	public $idhoi;


	//public $connection;

	public function __construct($NAME, $EMAIL, $CONTENT, $IDHOI) {
		$this->name=$NAME;
		$this->email=$EMAIL;
		$this->content=$CONTENT;
		$this->idhoi=$IDHOI;
		

	}
	public function insertAnswer() {
		//var_dump($GLOBALS['connection']);
		$connection = new Connection();

		$sql = "INSERT INTO `reply` (`name`, `email`, `content`, `idhoi`) VALUES ('$this->name', '$this->email', '$this->content', '$this->idhoi')";

		if (mysqli_query($connection->con, $sql)===true) {
		    //echo "New record created successfully";
		} else {
		    //echo "Error: " . $sql . "<br>" . mysqli_error($connection->con);
		}
		return $this;
	}



	

}


class AnswerManager {
	protected $list;

	public function __construct() {
		$this->list=array();
	}
	public function add($q) {
		//database working
		array_push($this->list,$q);
	}

	public function getAll($i) {
		//database working
		$connection = new Connection();

		$sql = "SELECT * FROM reply WHERE `idhoi` = '$i'";
		$result = $connection->con->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $q = new Answer($row['name'],$row['email'],$row['content'],$row['idhoi']);
		       	$this->add($q);


		    }
		} else {
		    //echo "0 results";
		}



		return $this->list;
	}	

	
		
	}




?>