<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $localAddress = "/ass2/BTL_LTW_ASS1_G1";
?>

<!DOCTYPE html>
<html>	
	<head>
	    <title></title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="<?php echo $localAddress; ?>/css/style.css"> 
        <link rel="stylesheet" href="<?php echo $localAddress; ?>/css/wt-rotator.css">

        <link rel="stylesheet" type="text/css" href="client/hieuung/jquery-ui-1.9.2.custom.css">
        <script  language="javascript" src="client/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="client/js/preview.js"></script>
        <script type="text/javascript" src="client/js/jquery-cycle.js"></script>
        <script type="text/javascript" src="client/js/jquery.wt-rotator.min.js"></script>


        <script language="javascript">
        function autorun(){
        selected = $('ul#ss li:first');
        selected.hide();
        $('ul#ss').append(selected);
        selected.show();
        setTimeout("autorun()",1400);
        }

        $(function(){
        autorun();

        $('a#next').click(function(){
        selected=$('ul#ss li:first');
        selected.hide();
        $('ul#ss').append(selected);
        selected.show();
        });
        $('a#pre').click(function(){
        selected=$('ul#ss li:last');
        selected.hide();
        $("ul#ss li:first").before(selected);
        selected.show();});
        });
        </script>


	</head>
	<body style="background-color: #c8e1f5">

        <nav class="navbar navbar-expand-md bg-secondary navbar-dark">
       
            <a id ="bds" class="navbar-brand" href="#top"><h1>BatDongSan</h1></a>

           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

           
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $localAddress; ?>/index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $localAddress; ?>/client/vietbai.php">Viết bài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $localAddress; ?>/client/datcauhoi.php">Đặt câu hỏi</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thông tin</a>
                    </li>                    
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo $localAddress; ?>/client/taikhoan.php">Tài khoản</a>
                    </li>  
                     

                </ul>        
                
                
            </div>
        </nav> 
      




