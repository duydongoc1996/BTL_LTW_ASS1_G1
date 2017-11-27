<?php
include_once dirname(__FILE__)."/../core/function.php";

$Manager = new UserManager();
$user = $Manager->getUserById($_GET['id']);

include_once "header.php";
?>

    <div>
        <h1>Chinh sua thong tin tai khoan</h1>
        <form method="post" action="editUserHandle.php">    
            <div class="form-group" hidden>
		    	<label for="id">Id:</label>
		    	<input type="text" class="form-control" id="id" name="id" maxlength="50" minlength="1" value="<?php echo"$user->id"; ?>">
		  	</div>	  	
		  	<div class="form-group">
		    	<label for="username">Username:</label>
		    	<input type="text" class="form-control" id="username" name="username" maxlength="50" minlength="1" value="<?php echo"$user->username"; ?>">
		  	</div>
		  	<div class="form-group">
		    	<label for="password">Password:</label>
		    	<input type="text" class="form-control" id="password" name="password" maxlength="50" minlength="1" value="<?php echo "$user->password"; ?>">
		  	</div>		  	
		  	<div class="form-group">
		    	<label for="firstname">Ho:</label>
		    	<input type="text" class="form-control" id="firstname" name="firstname" maxlength="50" minlength="1" value="<?php echo "$user->firstname"; ?>">
		  	</div>
		  	<div class="form-group">
		    	<label for="lastname">Ten:</label>
		    	<input type="text" class="form-control" id="lastname" name="lastname" maxlength="50" minlength="1" value="<?php echo "$user->lastname"; ?>">
		  	</div>
		  	<div class="form-group">
		    	<label for="email">Email:</label>
		    	<input type="text" class="form-control" id="email" name="email" maxlength="50" minlength="1" value="<?php echo "$user->email"; ?>">
            </div>
            
		  	<div class="form-check">
		  		<button type="submit" class="btn btn-primary" name="submit">Luu thay doi</button>		    	
		    	
		  	</div>	  	
		</form>  
    </div>






<?php include_once "footer.php"; ?>