<?php
include "connect.php";

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
	$GLOBALS['UserManager'];
	if (checkUsernameExist($GLOBALS['UserManager']->getAllUser(),$username) == false && 	
		$password == $repassword && (filter_var($email, FILTER_VALIDATE_EMAIL))
		) {
		(new User($username,$password,$email,0,$firstname,$lastname))->insertUser();
		return true;		
	} else return false;
}


function checkLogin($username,$password) {
	
	


}
function Logout() {

}
function search($str){

}
///////...
//var_dump(checkUsername($listUser,'aaaa'));
//var_dump(checkUsernameExist(($GLOBALS['UserManager']->getAllUser()),'aaaaa'));
//$email = '1	  abc@gmail.com';

 

?>