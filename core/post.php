<?php
include_once 'connect.php';
//Post object
class Post {
	public $id;
	public $tieude;
	public $tacgia;
	public $dientich;
	public $mota;
	public $diachi;
	public $giaban;
	public $hinhanh; //url
	public $ngaydang;

	public function __construct($ID,$TIEUDE,$TACGIA,$DIENTICH,$MOTA,$DIACHI,$GIABAN,$HINHANH,$NGAYDANG) {
		$this->id=$ID;
		$this->tieude=$TIEUDE;
		$this->tacgia=$TACGIA;
		$this->dientich=$DIENTICH;
		$this->mota=$MOTA;
		$this->diachi=$DIACHI;
		$this->giaban=$GIABAN;
		$this->hinhanh=$HINHANH;
		$this->ngaydang=$NGAYDANG;
	}		

	public function insertPost(){
		$connection = new Connection();

		$sql = "INSERT INTO `post` (`id`,`tieude`,`tacgia`,`dientich`,`mota`,`diachi`,`giaban`,`hinhanh`,`ngaydang`) VALUES (NULL,'$this->tieude','$this->tactia','$this->dientich','$this->mota','$this->diachi','$this->giaban','$this->hinhanh','$this->ngaydang')";
		if (mysqli_query($connection->con,$sql)===true) {
			//success
		} else {
			//error
		}
		return $this;
	}
	public function changeInfo($type,$value) {
		//database working
	}
}
//Post Manager object
class PostManager {
	protected $listPost;  // array[Post]

	public function __construct() {
		$this->listPost=array();
	}
	public function addPost($post) {
		//database working
		array_push($this->listPost,$post);
	}
	public function delPost($index) {
		//database working
		array_splice($this->listPost,$index,1);
	}
	public function getPost($id) {
		$connection = new Connection();

		$sql = "SELECT * FROM `post`
		WHERE `id`='$id';
		";
		$result = $connection->con->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$post = new Post(
					$row['id'],
					$row['tieude'],
					$row['tacgia'],
					$row['dientich'],
					$row['mota'],
					$row['diachi'],
					$row['giaban'],
					$row['hinhanh'],
					$row['ngaydang']
				);
			}
			return $post;
		} else {
			// no result
			return false;
		}
 

	}


	public function getAllPost() {
		//database working
		$connection = new Connection();

		$sql = "SELECT * FROM post";
		$result = $connection->con->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$post = new Post(
					$row['id'],
					$row['tieude'],
					$row['tacgia'],
					$row['dientich'],
					$row['mota'],
					$row['diachi'],
					$row['giaban'],
					$row['hinhanh'],
					$row['ngaydang']
				);
				$this->addPost($post);
			}
		} else {
			// no result
		}
		return $this->listPost;
	}
}
//////////////Running/////////
///$PostManager = new PostManager();
//$listPost = $PostManager->getAllPost();// array[Post] ex: $listPost[$index]->id ... $listPost[$index]->tieude
//var_dump($listPost);
?>