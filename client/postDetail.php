
<?php 
	include_once "header.php";
	include_once dirname(__FILE__)."/../core/function.php";
?>

<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$manager = new PostManager();
		$post = $manager->getPost($id);


	}
?>

	<div class="PostComponentDetail">
		<h1><?php echo $post->tieude; ?></h1><hr>
		<p>Tac gia: <?php echo $post->tacgia; ?></p>
		<p>Dien tich: <?php echo $post->dientich; ?></p>
		<p>Gia ban: <?php echo $post->giaban; ?></p>
		<p>Mo ta: <?php echo $post->mota; ?></p>
		<p>Dia chi: <?php echo $post->diachi; ?></p>
		<p><?php echo "<img class='ImageComponent' src='"."client/".$post->hinhanh."' alt='image'/>"; ?></p>
		<p>Ngay dang: <?php echo $post->ngaydang; ?></p>

	</div>




<?php include_once "footer.php";?>
