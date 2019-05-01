<?php
session_start();
if(!isset($_SESSION['user_id']))
	header("Location: ../knoma/login_signup_c.php?Can't go back");
include 'dbconn.php';
$ques=mysqli_real_escape_string($conn,$_POST['askques']);
$page=mysqli_real_escape_string($conn,$_POST['askpage']);
if(empty($ques)||empty($page)){
    header("Location: ../logined.php?attributes=empty");
	exit();	
}else{
	$q="SELECT * from page WHERE page_name='$page'";
	$result=mysqli_query($conn,$q);
	$r=mysqli_fetch_assoc($result);
	$rr=$r['page_id'];
	$sql="INSERT INTO questions (askedby,question,date_of_ques,page_id) values('".$_SESSION['user_id']."','$ques',CURDATE(),'$rr');";
	mysqli_query($conn,$sql);
	header("Location: ../logined.php?question=posted");
	exit();
}
?>