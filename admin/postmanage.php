<?php 
    include_once "header.php"; 
    include dirname(__FILE__)."/../core/function.php";
?>
<div class="container-fluid">
    <?php 
    $Manager = new PostManager();
    $listPost = $Manager->getAllPost();
    //var_dump($Manager->getAllPost());
    
    echo "
        <table class='table-user'>
            <tr class='table-tr'>
                <td class='table-td'>Post-Id</td>
                <td class='table-td'>Tieu de</td>
                <td class='table-td'>Tac gia</td>
                <td class='table-td'>Dien tich</td>
                <td class='table-td'>Dia chi</td>
                <td class='table-td'>Gia ban</td>
                <td class='table-td'>Ngay dang</td>      
                <td class='table-td'>Edit?</td>
                <td class='table-td'>Delete?</td>          
            </tr>
            
    ";

    foreach ($listPost as $post) {
        echo "
            <tr class='table-tr'>
                <td class='table-td'>".$post->id."</td>
                <td class='table-td'>".$post->tieude."</td>
                <td class='table-td'>".$post->tacgia."</td>
                <td class='table-td'>".$post->dientich."</td>
                <td class='table-td'>".$post->diachi."</td>
                <td class='table-td'>".$post->giaban."</td>
                <td class='table-td'>".$post->ngaydang."</td>
                <td class='table-td'>
                    <a href='editPost.php?id=".$post->id."'><div class='button-edit'>Edit post</div></a>                    
                </td>
                <td class='table-td'>
                    <a href='deletePost.php?id=".$post->id."'><div class='button-delete'>Detele post</div></a>
                </td>
            </tr>
        
        
        ";
    }

    echo "</table>";
    
    
    
    ?>        
</div>
    <?php include_once "footer.php" ?>