<?php
include '../core/question.php';

$t=$_POST["t"];
$arr=explode("/",$t);
$title=$arr[0];
$name=$arr[1];
$email=$arr[2];
$content=$arr[3];
$m = new Question($title,$name,$email,$content);
$m->insertQuestion();
?>