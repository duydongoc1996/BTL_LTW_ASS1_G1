<?php include "header.php"; include dirname(__FILE__)."/../core/function.php"; ?>    
    
    <div class="container-fluid">
    	<hr>
    	<h2>Dang nhap de tiep tuc</h2>
    	<form method="post" action="dangnhap.php">    	  	
		  	<div class="form-group">
		    	<label for="username">Username:</label>
		    	<input type="text" class="form-control" name="username">
		  	</div>
		  	<div class="form-group">
		    	<label for="password">Password:</label>
		    	<input type="password" class="form-control" name="password">
		  	</div>
		  	<div class="form-check">
		  		<button type="submit" class="btn btn-primary">Dang nhap</button>
		    	<label class="form-check-label">
		      	<input class="form-check-input" type="checkbox"> Duy tri dang nhap
		    	</label>
		  	</div>	  	
		</form>
		<span>Neu chua co tai khoan, xin vui long <a href="dangki.php">Dang ki</a></span>
	</div>  

	<?php  
		if (isset($_POST['username']) && isset($_POST['password'])) {
			if ((checkLogin($_POST['username'],$_POST['password']))==true) {
				$_SESSION['username'] = $_POST['username'];
				echo "<script language='javascript' type='text/javascript'>location.href='taikhoan.php'</script>";
				//echo "<script language='javascript' type='text/javascript'>alert('Thanh cong');</script>";
			} else {
				echo "<script language='javascript' type='text/javascript'>alert('Sai username/password');</script>";
			}
		} 
	?>


<?php include "footer.php" ?>