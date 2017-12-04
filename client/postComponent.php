<style>
<?php //include 'css/style.css'; ?>
</style>



<?php

echo '
    <div class="container" style="clear:both;width:1024px;">
        <div class="wt-rotator">
            <a href="#"></a>            
            <div class="c-panel">
                
                <div class="thumbnails">
                    <ul>
                        <li><a href="client/slide/hinh1.jpg" title=""></a></li>
                        <li><a href="client/slide/hinh2.jpg" title=""></a></li>
                        <li><a href="client/slide/hinh3.jpg" title=""></a></li>
                        <li><a href="client/slide/hinh4.jpg" title=""></a></li>
                        
                    </ul>
                </div>     
            </div>
        </div>  
  </div>



<div id=hr><h2>Dự án tiêu biểu</h2> <a id=next ><img src="client/slide/next.png" height=20 width=20></a><a id=pre><img src="client/slide/previous.png" height=20 width=20></a></div>
<div id=ha>
    <ul id=ss>
     <li><img src=client/slide/hinh1.jpg width=200 height=100><br>Khu dân cư</li>
     <li><img src=client/slide/hinh2.jpg width=200 height=100><br>Khách sạn Tình Yêu</li>
     <li><img src=client/slide/hinh3.jpg width=200 height=100><br>Khách sạn Bình Yên</li>
     <li><img src=client/slide/hinh1.jpg width=200 height=100><br>Biệt thự Ngôi Sao</li>
     <li><img src=client/slide/hinh2.jpg width=200 height=100><br>Căn hộ Bình Dân</li>
     <li><img src=client/slide/hinh3.jpg width=200 height=100><br>Căn hộ Vi DIệu</li>
     <li><img src=client/slide/hinh1.jpg width=200 height=100><br>Khách sạn Đông Nam</li>
     <li><img src=client/slide/hinh2.jpg width=200 height=100><br>Khách sạn Nam Á</li>
     <li><img src=client/slide/hinh3.jpg width=200 height=100><br>Biệt Thự Triệu Like</li>
    </ul>
</div>';

?>



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
                <h2><a href='client/postDetail.php?id=".$post->id."'>".$post->tieude."</a></h2>
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



