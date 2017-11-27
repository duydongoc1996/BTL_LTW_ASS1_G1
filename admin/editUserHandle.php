<?php
include_once dirname(__FILE__)."/../core/function.php";

if (
    isset($_POST['submit']) &&
    isset($_POST['id']) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['email']) &&
    isset($_POST['firstname']) &&
    isset($_POST['lastname'])) {
    
    $Manager = new UserManager();
    $user = $Manager->getUserById($_POST['id']);
    

    //function changeInfo($ID,$USERNAME,$PASSWORD,$EMAIL,$FIRSTNAME,$LASTNAME)
    if ($user->changeInfo($_POST['id'],$_POST['username'],$_POST['password'],$_POST['email'],$_POST['firstname'],$_POST['lastname'])) {
        echo "<script language='javascript' type='text/javascript'>alert('Thanh cong');</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('That bai');</script>";
    }
    echo "<script language='javascript' type='text/javascript'>location.href='usermanage.php'</script>";
    


}



?>