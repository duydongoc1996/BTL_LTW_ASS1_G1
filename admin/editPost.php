<?php
include_once dirname(__FILE__)."/../core/function.php";

$Manager = new PostManager();
$post = $Manager->getPost($_GET['id']);

include_once "header.php";
?>

    <div class="container-fluid">
        <form action="editPostHandle.php" method="post" enctype="multipart/form-data">
            <div class="form-group" hidden>
                <label for="id">Id:</label>
                <input type="text" class="form-control" name="id" value="<?php echo $post->id; ?>">
            </div>
            <div class="form-group">
                <label for="tieude">Tieu de</label>
                <input type="text" class="form-control" name="tieude" value="<?php echo $post->tieude; ?>">
            </div>
            
            <div class="form-group">
                <label for="dientich">Dien tich</label>
                <input type="text" class="form-control" name="dientich" value="<?php echo $post->dientich; ?>">
            </div>
            <div class="form-group">
                <label for="diachi">Dia chi</label>
                <input type="text" class="form-control" name="diachi" value="<?php echo $post->diachi; ?>">
            </div>
            <div class="form-group">
                <label for="giaban">Gia ban</label>
                <input type="text" class="form-control" name="giaban" value="<?php echo $post->giaban; ?>">
            </div>
            <div class="form-group">
                <label for="mota">Mo ta</label>
                <!--input type="text" class="form-control" name="mota"-->
                <textarea name="mota" rows="7" class="form-control"><?php echo $post->mota; ?></textarea>
            </div>
            <div class="form-group">
                <label for="ngaydang">Ngay dang</label>
                <input type="date" class="form-control" name="ngaydang" value="<?php echo $post->ngaydang; ?>">
            </div>

    		<input class='btn btn-info' type="submit" name="submit" value="Luu thay doi">   
    	</form>
	</div>



<?php include_once "footer.php"; ?>


