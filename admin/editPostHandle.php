<?php
include_once dirname(__FILE__)."/../core/function.php";

if (
    isset($_POST['submit']) &&
    isset($_POST['id']) &&
    isset($_POST['tieude']) &&    
    isset($_POST['giaban']) &&
    isset($_POST['diachi']) &&
    isset($_POST['mota']) &&
    isset($_POST['ngaydang']) &&
    isset($_POST['dientich'])) {
    
    $Manager = new PostManager();   
    $post = $Manager->getPost($_POST['id']);
    

    //changeInfo($ID,$TIEUDE,$DIENTICH,$MOTA,$DIACHI,$GIABAN,$NGAYDANG)
    if ($post->changeInfo($_POST['id'],$_POST['tieude'],$_POST['dientich'],$_POST['mota'],$_POST['diachi'],$_POST['giaban'],$_POST['ngaydang'])) {
        echo "<script language='javascript' type='text/javascript'>alert('Thanh cong');</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('That bai');</script>";
    }
    echo "<script language='javascript' type='text/javascript'>location.href='postmanage.php'</script>";
    


}



?>