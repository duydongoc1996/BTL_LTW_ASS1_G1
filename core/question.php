<?php
include_once 'connect.php';
//User object
class Question {
	public $id;
	public $title;
	public $name;
	public $content;
	public $email;


	//public $connection;

	public function __construct($TITLE, $NAME, $CONTENT, $EMAIL) {
		$this->title=$TITLE;
		$this->name=$NAME;
		$this->content=$CONTENT;
		$this->email=$EMAIL;
		

	}
	public function insertQuestion() {
		//var_dump($GLOBALS['connection']);
		$connection = new Connection();

		$sql = "INSERT INTO `hoidap` (`title`, `name`, `email`, `content`) VALUES ('$this->title', '$this->name', '$this->email', '$this->content')";

		if (mysqli_query($connection->con, $sql)===true) {
		    //echo "New record created successfully";
		} else {
		    //echo "Error: " . $sql . "<br>" . mysqli_error($connection->con);
		}
		return $this;
	}



	

}


class QuestionManager {
	protected $list;

	public function __construct() {
		$this->list=array();
	}
	public function add($q) {
		//database working
		array_push($this->list,$q);
	}

	public function getAll() {
		//database working
		$connection = new Connection();

		$sql = "SELECT * FROM hoidap";
		$result = $connection->con->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $q = new Question($row['title'],$row['name'],$row['email'],$row['content']);
		        $q->id = $row['id'];
		        $this->add($q);


		    }
		} else {
		    //echo "0 results";
		}



		return $this->list;
	}	

	
		
	}




?>