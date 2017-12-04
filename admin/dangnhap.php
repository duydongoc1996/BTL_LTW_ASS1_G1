<?php include "header.php"; include dirname(__FILE__)."/../core/function.php"; ?>    


    <div class="container-fluid" style="width: 40%" >
    	<hr>
    	<h2>Đăng nhập để tiếp tục</h2>
    	<form id= "contain" method="post" action="dangnhap.php">    	  	
		  	<div class="form-group">
		    	<label for="username">Username:</label>
		    	<input type="text" class="form-control" name="username">
		  	</div>
		  	<div class="form-group">
		    	<label for="password">Password:</label>
		    	<input type="password" class="form-control" name="password">
		  	</div>
		  	<div class="form-check">
		  		<button type="submit" class="btn btn-primary">Đăng nhập</button>
		    	<label class="form-check-label">
		      	<input class="form-check-input" type="checkbox"> Duy trì đăng nhập
		    	</label>
		  	</div>	  	
		</form>
		<span>Nếu chưa có tài khoản, xin vui lòng <a href="dangki.php">Đăng kí</a></span>
	</div>  

	<?php  
		if (isset($_POST['username']) && isset($_POST['password'])) {
			if ((checkLoginAdmin($_POST['username'],$_POST['password']))==true) {
				$_SESSION['usernameadmin'] = $_POST['username'];
				
				
				echo "<script language='javascript' type='text/javascript'>location.href='trangchu.php'</script>";
				//echo "<script language='javascript' type='text/javascript'>alert('Thanh cong');</script>";
			} else {
				echo "<script language='javascript' type='text/javascript'>alert('Sai username/password');</script>";
			}
		} 
	?>


<?php include "footer.php" ?>