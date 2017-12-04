<?php include_once "header.php"; 

if (!isset($_SESSION['usernameadmin'])) {
        echo "<script language='javascript' type='text/javascript'>location.href='dangnhap.php'</script>";
    } else if (isset($_POST['logout'])) {
        session_destroy();
        echo "<script language='javascript' type='text/javascript'>location.href='dangnhap.php'</script>";
    } 


?>




    <h1>Đăng nhập thành công</h1><hr>
    <div class="container-fluid">
        <form action="trangchu.php" method="post">
            <input class='btn btn-danger' type="submit" name="logout" value="Log out">
        </form>
    </div>

<?php include_once "footer.php" ?>