<?php 
include_once dirname(__FILE__)."/../core/function.php";
$Manager = new PostManager();
$listPost = $Manager->getAllPost();
//var_dump($listPost);
?>


<?php 

    foreach($listPost as $post ) {
        echo "
        <div class='postComponent'>
            <div class='postTitle'>
                <h2><a href='postDetail.php?".$post->id."'>".$post->tieude."</a></h2>
            </div>            
            <div class='postImage'>
                <img class='ImageComponent' src='"."client/".$post->hinhanh."' alt='image'/>
            </div>
            <div class='postArea'>
                <p>".$post->dientich."</p>
            </div>
            <div class='postPrice'>
                <p>".$post->giaban."</p>
            </div> 

        
        </div><hr>";
    }


?>



