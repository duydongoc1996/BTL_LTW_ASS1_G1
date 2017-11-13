<?php

//Post object
class Post {
	public $id;
	public $tieude;
	public $tacgia;
	public $dientich;
	public $mota;
	public $diachi;
	public $giaban;
	public $hinhanh;

	public function __construct($ID,$TIEUDE,$TACGIA,$DIENTICH,$MOTA,$DIACHI,$GIABAN,$HINHANH) {
		$this->id=$ID;
		$this->tieude=$TIEUDE;
		$this->tacgia=$TACGIA;
		$this->dientich=$DIENTICH;
		$this->mota=$MOTA;
		$this->diachi=$DIACHI;
		$this->giaban=$GIABAN;
		$this->hinhanh=$HINHANH;
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
	public function getAllPost() {
		//database working
		return $this->listPost;
	}
}
//////////////Running/////////
//$PostManager = new PostManager();
//$listPost = $PostManager->getAllPost();// array[Post] ex: $listPost[$index]->id ... $listPost[$index]->tieude

?>