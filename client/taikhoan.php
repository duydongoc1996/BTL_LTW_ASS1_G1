    <?php include "header.php" ?>
    
    <?php 
    	if (!isset($_SESSION['username'])) {
    		echo "<script language='javascript' type='text/javascript'>location.href='dangnhap.php'</script>";
    	} else if (isset($_POST['logout'])) {
    		session_destroy();
    		echo "<script language='javascript' type='text/javascript'>location.href='dangnhap.php'</script>";
    	}

    ?>
    <div class="container-fluid">
    	<form action="taikhoan.php" method="post">
    		<input class='btn btn-danger' type="submit" name="logout" value="Log out">
    	</form>
	</div>
Bạn có muốn đổi mật khẩu? Hãy nhấp vào <a href="doimatkhau.php">Đổi mật khẩu</a><br>
Bạn có muốn đổi thay đổi thông tin cá nhân? Hãy nhấp vào <a href="suathongtin.php">Sửa thông tin cá nhân</a>



    <?php include "footer.php" ?>