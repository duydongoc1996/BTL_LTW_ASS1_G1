<?php session_start(); 
    $localAddress = "/ass2/BTL_LTW_ASS1_G1";
?>

<!DOCTYPE html>
<html lang="en">	
	<head>
	    <title>Adminitrastor Page</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="<?php echo $localAddress; ?>/css/style.css">
	</head>
	<body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top	">
            <!-- Brand -->
            <a class="navbar-brand" href="../index.php"><h1>BatDongSan</h1></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $localAddress; ?>/admin/index.php">Quan ly</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $localAddress; ?>/admin/usermanage.php">Tai khoan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $localAddress; ?>/admin/postmanage.php">Bai dang</a>
                    </li>   
                   
                     
                    
                </ul>        
                
                
            </div>
        </nav> 




            <div class="container-fluid">
        <form action="../client/taikhoan.php" method="post">
            <input class='btn btn-danger' type="submit" name="logout" value="Log out">
        </form>
    </div>
  