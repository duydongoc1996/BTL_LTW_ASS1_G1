<?php
include '../core/answer.php';

$gt=$_POST["gt"];
$arr=explode("/",$gt);
$name=$arr[0];
$email=$arr[1];
$content=$arr[2];
$idhoi=$arr[3];
$m = new Answer($name,$email,$content,$idhoi);
$m->insertAnswer();
?>