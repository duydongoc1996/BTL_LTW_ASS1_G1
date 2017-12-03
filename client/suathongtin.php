<?php
include_once dirname(__FILE__)."/../core/function.php";
session_start();  
$Manager = new UserManager();
$user = $Manager->getUserById($_SESSION['id']);

include_once "header.php";
?>

    <div>
        <h1>Chỉnh sửa thông tin cá nhân</h1>
        <form class="form-horizontal" role="form" method="post" action="correctInfo.php">    		  	
		  	<div class="form-group">
		    	<label for="firstname" class="col-sm-3 control-label">Họ:</label>
		    	<div class="col-sm-4">
		    	<input type="text" class="form-control" id="firstname" name="firstname" maxlength="50" minlength="1" value="<?php echo "$user->firstname"; ?>">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="lastname" class="col-sm-3 control-label">Tên:</label>
		    	<div class="col-sm-4">
		    	<input type="text" class="form-control" id="lastname" name="lastname" maxlength="50" minlength="1" value="<?php echo "$user->lastname"; ?>">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="email" class="col-sm-3 control-label">Email:</label>
		    	<div class="col-sm-4">
		    	<input type="text" class="form-control" id="email" name="email" maxlength="50" minlength="1" value="<?php echo "$user->email"; ?>">
		    	</div>
            </div>
            
		  	<div class="form-check">
		  		<button type="submit" class="btn btn-primary" name="submit">Lưu thay đổi</button>		    	
		    	
		  	</div>	  	
		</form>  
    </div>






<?php include_once "footer.php"; ?>