<?php
include_once "connect.php";

include "user.php";

include "post.php";

//init
$GLOBALS['UserManager'] = new UserManager();


function checkUsernameExist($listUser,$username) {
	$numUser = count($listUser);
	for($x = 0; $x < $numUser; $x++) {
    	if ($listUser[$x]->username == $username) return true;    	
	}
	return false;
}

function signUp($username,$password,$repassword,$firstname,$lastname,$email) {
	$Manager = new UserManager();
	//$GLOBALS['UserManager'];
	if (checkUsernameExist($Manager->getAllUser(),$username) == false && 	
		$password == $repassword && (filter_var($email, FILTER_VALIDATE_EMAIL))
		) {
		(new User($username,$password,$email,0,$firstname,$lastname))->insertUser();
		return true;		
	} else return false;
}

function checkLogin($username,$password) {
	$Manager = new UserManager();
	$res = $Manager->getUser($username,$password);
	if ($res==false) {
		return false;
	} else {
		return true;
	}
}

function newPost($tieude,$tacgia,$dientich,$diachi,$giaban,$mota,$ngaydang,$hinhanh) {
	(new Post(null,$tieude,$tacgia,$dientich,$mota,$diachi,$giaban,$hinhanh,$ngaydang))->insertPost();
	return true;
}
function Logout() {

}
function search($str){

}
///////...
//var_dump(checkUsername($listUser,'aaaa'));
//var_dump(checkUsernameExist(($GLOBALS['UserManager']->getAllUser()),'aaaaa'));
//$email = '1	  abc@gmail.com';
//var_dump((checkLogin('a','b')));
 //var_dump(signUp('a','a','a','a','a','abc@gmail.com'));

?>