    <?php 
    include_once "header.php"; 
    include dirname(__FILE__)."/../core/function.php";
    
    ?>
    <?php 
    	if (!isset($_SESSION['username'])) {
    		echo "<script language='javascript' type='text/javascript'>location.href='dangnhap.php'</script>";
    	} else if (isset($_POST['logout'])) {
    		session_destroy();
    		echo "<script language='javascript' type='text/javascript'>location.href='dangnhap.php'</script>";
    	}

    ?>


    <div class="container-fluid" style="width: 50%">
    	<form action="vietbai.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="tieude">Tiêu đề</label>
                <input type="text" class="form-control" name="tieude">
            </div>
            
            <div class="form-group">
                <label for="dientich">Diện tích</label>
                <input type="text" class="form-control" name="dientich">
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" class="form-control" name="diachi">
            </div>
            <div class="form-group">
                <label for="giaban">Giá bán</label>
                <input type="text" class="form-control" name="giaban">
            </div>
            <div class="form-group">
                <label for="mota">Mô tả</label>
                <!--input type="text" class="form-control" name="mota"-->
                <textarea name="mota" rows="7" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="ngaydang">Ngày đăng</label>
                <input type="date" class="form-control" name="ngaydang">
            </div>
            <div class="form-group">
                <label for="hinhanh">Hình ảnh</label>
                <input type="file" class="form-control" name="hinhanh">
            </div>


    		<input class='btn btn-info' type="submit" name="submit" value="Đăng bài">
    	</form>
	</div>

    <?php 
   
    $isImageOk = false;
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
        
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        $check = getimagesize($_FILES["hinhanh"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            //echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["hinhanh"]["size"] > 500000) {
            //echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            //echo "Sorry, your file was not uploaded.";
            echo "<script language='javascript' type='text/javascript'>alert('Sorry, your image was not uploaded.');</script>";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                //echo "The file ". basename( $_FILES["hinhanh"]["name"]). " has been uploaded ";
                //echo "<script language='javascript' type='text/javascript'>alert('');</script>";
                $isImageOk = true;
            } else {
                //echo "Sorry, there was an error uploading your file.";
                echo "<script language='javascript' type='text/javascript'>alert('Sorry, there was an error uploading your image');</script>";
            }
        }


        //Call function
        if (    isset($_POST['tieude']) &&               
                isset($_POST['dientich']) &&
                isset($_POST['diachi']) &&
                isset($_POST['giaban']) &&
                isset($_POST['mota']) &&
                isset($_POST['ngaydang'])                
        ) {
            if (
                $isImageOk && 
                (newPost(
                    $_POST['tieude'],
                    $_SESSION['username'],
                    $_POST['dientich'],
                    $_POST['diachi'],
                    $_POST['giaban'],
                    $_POST['mota'],
                    $_POST['ngaydang'],
                    $target_file
                ))
            ) {
                echo "<script language='javascript' type='text/javascript'>alert('Đăng bài thành công');</script>";
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('Đăng bài không thành công!');</script>";
            }
        }

    }

    
    
    ?>



    <?php include "footer.php" ?>