<?php
include_once dirname(__FILE__)."/../core/function.php";
session_start();
if (isset($_POST['submit'])) {
    
    $Manager = new UserManager();
    $user = $Manager->getUserById($_SESSION['id']);
    

    //function changeInfo($ID,$USERNAME,$PASSWORD,$EMAIL,$FIRSTNAME,$LASTNAME)
    if ($user->changePrivate($_SESSION['id'],$_POST['email'],$_POST['firstname'],$_POST['lastname'])==true) {
        echo "<script language='javascript' type='text/javascript'>alert('Thanh cong');</script>";
        echo "<script language='javascript' type='text/javascript'>location.href='../index.php'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('That bai');</script>";
        echo "<script language='javascript' type='text/javascript'>location.href='../index.php'</script>";
    }
    

}



?>