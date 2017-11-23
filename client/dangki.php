
    <?php include "header.php" ?>
    <h2>Nhap thong tin de dang ki tai khoan</h2>
    <form method="post" action="signup.php">    	  	
		  	<div class="form-group">
		    	<label for="username">Username:</label>
		    	<input type="text" class="form-control" id="username" name="username" maxlength="50" minlength="1">
		  	</div>
		  	<div class="form-group">
		    	<label for="password">Password:</label>
		    	<input type="password" class="form-control" id="password" name="password" maxlength="50" minlength="1">
		  	</div>
		  	<div class="form-group">
		    	<label for="repassword">Re-Password:</label>
		    	<input type="password" class="form-control" id="repassword" name="repassword" maxlength="50" minlength="1">
		  	</div>
		  	<div class="form-group">
		    	<label for="firstname">Ho:</label>
		    	<input type="text" class="form-control" id="firstname" name="firstname" maxlength="50" minlength="1">
		  	</div>
		  	<div class="form-group">
		    	<label for="lastname">Ten:</label>
		    	<input type="text" class="form-control" id="lastname" name="lastname" maxlength="50" minlength="1">
		  	</div>
		  	<div class="form-group">
		    	<label for="email">Email:</label>
		    	<input type="text" class="form-control" id="email" name="email" maxlength="50" minlength="1">
		  	</div>
		  	<div class="form-check">
		  		<button type="submit" class="btn btn-primary" name="submit">Dang ki</button>		    	
		    	</label>
		  	</div>	  	
		</form>   

    <?php include "footer.php" ?>