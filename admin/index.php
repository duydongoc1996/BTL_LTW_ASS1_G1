
    <?php include "header.php" ?>
    
    <?php 
    if (!isset($_SESSION['usernameadmin'])) {
    	echo "<script language='javascript' type='text/javascript'>location.href='dangnhap.php'</script>";
    } else if (isset($_POST['logout'])) {
    	session_destroy();
    	echo "<script language='javascript' type='text/javascript'>location.href='dangnhap.php'</script>";
    } else {
    	include "trangchu.php";
    }


    ?>        

    <?php include "footer.php" ?>