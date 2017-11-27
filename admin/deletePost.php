<?php
    include dirname(__FILE__)."/../core/function.php";

    $Manager = new PostManager();
    //$listUser = $Manager->getAllUser();

    if ($Manager->deletePost($_GET['id'])) {
        echo "<script language='javascript' type='text/javascript'>alert('Thanh cong');</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('That bai');</script>";
    }

    echo "<script language='javascript' type='text/javascript'>location.href='postmanage.php'</script>";
    
?>