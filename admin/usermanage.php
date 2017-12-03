
    <?php 
    include_once "header.php"; 
    include dirname(__FILE__)."/../core/function.php";
    if (!isset($_SESSION['usernameadmin'])) {
        echo "<script language='javascript' type='text/javascript'>location.href='dangnhap.php'</script>";
    } else if (isset($_POST['logout'])) {
        session_destroy();
        echo "<script language='javascript' type='text/javascript'>location.href='dangnhap.php'</script>";
    } 

    ?>
<div class="container-fluid">
    <?php 
    $Manager = new UserManager();
    $listUser = $Manager->getAllUser();
    //var_dump($Manager->getAllUser());
    
    echo "
        <table class='table-user'>
            <tr class='table-tr'>
                <td class='table-td'>User-Id</td>
                <td class='table-td'>Username</td>
                <td class='table-td'>Password</td>
                <td class='table-td'>Email</td>
                <td class='table-td'>Session</td>
                <td class='table-td'>Firstname</td>
                <td class='table-td'>Lastname</td>      
                <td class='table-td'>Edit?</td>
                <td class='table-td'>Delete?</td>          
            </tr>
            
    ";

    foreach ($listUser as $user) {
        echo "
            <tr class='table-tr'>
                <td class='table-td'>".$user->id."</td>
                <td class='table-td'>".$user->username."</td>
                <td class='table-td'>".$user->password."</td>
                <td class='table-td'>".$user->email."</td>
                <td class='table-td'>".$user->session."</td>
                <td class='table-td'>".$user->firstname."</td>
                <td class='table-td'>".$user->lastname."</td>
                <td class='table-td'>
                    <a href='editUser.php?id=".$user->id."'><div class='button-edit'>Edit User</div></a>                    
                </td>
                <td class='table-td'>
                    <a href='deleteUser.php?id=".$user->id."'><div class='button-delete'>Detele User</div></a>
                </td>
            </tr>
        
        
        ";
    }

    echo "</table>";
    
    
    
    ?>        
</div>
    <?php include_once "footer.php" ?>