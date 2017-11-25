<?php
include dirname(__FILE__)."/../core/function.php";

if (
	isset($_POST['username']) && 
	isset($_POST['password']) && 
	isset($_POST['repassword']) &&
	isset($_POST['firstname']) &&
	isset($_POST['lastname']) &&
	isset($_POST['email'])
) {
	if (signUp($_POST['username'],$_POST['password'],$_POST['repassword'],$_POST['firstname'],$_POST['lastname'],$_POST['email'])) 	
		echo "Dang ki thanh cong! <br>
		Tro lai trang <a href='taikhoan.php'>Dang nhap</a> <br>
		";   
		//<script language='javascript' type='text/javascript'> location.href='dangnhap.php' </script>
		else {
			echo "Dang ki that bai! Error code = 1 <br>
			Tro lai trang <a href='taikhoan.php'>Dang nhap</a> <br>
			";		
		}
} else {
	echo "Dang ki that bai! Error code = 2 <br>
			Tro lai trang <a href='taikhoan.php'>Dang nhap</a> <br>
			";	
}


?>