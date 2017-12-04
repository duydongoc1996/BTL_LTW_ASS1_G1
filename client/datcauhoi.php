<style>
<?php include '../css/questionstyle.css'; ?>
</style>
<?php include "header.php";?>
<?php include "../core/question.php";?>
<?php include "../core/answer.php";?>

<script src="js/datcauhoi.js"></script>
<script src="js/reply.js"></script>

<div id=guicauhoi>
<h3 id="listhoidap">Hỏi đáp</h3>
<table border=0 cellpadding=1 cellspacing=0 width=600 align=center>
<form action="" method=post>
<tr>
<td colspan=2>
Tiêu đề câu hỏi (<span>*</span>):<br>
<input type=text name=title  id=title><br><span id=title></span>
</td>
</tr>
<tr>
<td>
Tên người gửi (<span>*</span>):<br>
<input type=text name=name  id=name><br><span id=name></span>
</td>
<td>
Email(<span>*</span>):<br>
<input type=text name=email id=email><br><span id=email></span>
</td>
</tr>
<tr>
<td colspan=2>
Nội dung (<span>*</span>):<br>
<textarea  name=content  id=content cols=80 rows=15></textarea><br><span id=content></span>
</td>
</tr>
<tr>
<td colspan=2 align=center>
<input type=button name=ok id=sub class=sub value="Gửi"><input class=sub id=reset2 type=reset value="Hủy">
</td>
</tr>
<tr>
<td colspan=2 align=center>
<h4 id=tb></h4>
</td>
</tr>
</form>
</table>
<br><br>

<h3 id="listch" style="margin-top:0px;z-index:5;position:relative">Danh sách câu hỏi</h3></div>
<?php
$m = new QuestionManager();
$q = $m->getAll();
$i = 0;
while($i<count($q)){
  $k=$q[$i]->id;
?>
<div id=listquestion>
 <i>Chủ đề: <?php echo $q[$i]->title;?></i><br>
  <span class=reply><?php echo $q[$i]->name;?></span> <span id="hoi"> đã hỏi: </span><br>
  <div class=question><h5>
 <?php echo $q[$i]->content;?>
 </h5>
  </div>




  <p align=center>
  <a id=reply style="cursor:pointer"><img src="slide/traloi.png"></a>
  </p>

    <div class=reply>
  <table border=0 width=600>
    <form action="" method=post>
   <tr>
   <td>Tên:<br><input type=text name=txtname id=ten class=re></td>
   <td>Email: <br><input type=text name=txtemail id=mail class=re></td>
   </tr>
    <tr>
   <td colspan=2 align=center><input type=hidden value = '<?php echo $k; ?>' name=id id=id class=re></td>
   </tr>
    <tr>
   <td colspan=2 align=center>Nội dung:<br><textarea cols=70 rows=10 name=noidung id=noidungr></textarea></td>
   </tr>
   <tr>
<td colspan=2 align=center>
<input type=button name=ok id=send  value="Gửi"><input type=reset value="Hủy">
</td>
</tr>
  </form>
  </table>
  </div>


  
  <?php
$n = new AnswerManager();
$p = $n->getAll($q[$i]->id);
$j = 0;
while($j<count($p)){

  ?>
  <div id=listreply>

  <span class="reply"><?php echo $p[$j]->name; ?> </span> <span id="hoi"> đã nói: </span><br>
   <h5><?php echo $p[$j]->content;?></h5>
  </div>
  <?php
  $j++;}
  ?>



  </div>




<?php
$i++;}
?>

