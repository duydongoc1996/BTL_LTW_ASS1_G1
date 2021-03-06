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

		$sql = "INSERT INTO `post` (`id`,`tieude`,`tacgia`,`dientich`,`mota`,`diachi`,`giaban`,`hinhanh`,`ngaydang`) VALUES (NULL,'$this->tieude','$this->tacgia','$this->dientich','$this->mota','$this->diachi','$this->giaban','$this->hinhanh','$this->ngaydang')";		
		if ($result = mysqli_query($connection->con,$sql)===true) {
			//success
			
			
			//echo $this->id;
		} else {
			//error
		}
		return $this;
	}
	public function changeInfo($ID,$TIEUDE,$DIENTICH,$MOTA,$DIACHI,$GIABAN,$NGAYDANG) {
		//database working
		$connection = new Connection();
		
		$sql = "UPDATE `post` SET
			`tieude`='$TIEUDE',
			`dientich`='$DIENTICH',
			`mota`='$MOTA',
			`diachi`='$DIACHI',
			`giaban`='$GIABAN',
			`ngaydang`='$NGAYDANG'
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

	public function deletePost($id) {
		//database working
		$connection = new Connection();

		$sql = "DELETE FROM `post` WHERE `id`='$id'";		
		if (mysqli_query($connection->con, $sql)===true) {
			//echo "Delete record successfully";
			$index=0;
			foreach ($this->listPost as $post) {
				# code...				
				if ($post->id == $id) {
					$this->delPost($index);
					break;
				}
				$index += 1;
			}
			return true;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($connection->con);
			return false;
		}
		
	}

}
//////////////Running/////////
///$PostManager = new PostManager();
//$listPost = $PostManager->getAllPost();// array[Post] ex: $listPost[$index]->id ... $listPost[$index]->tieude
//var_dump($listPost);


?>