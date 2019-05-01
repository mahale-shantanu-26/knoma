<?php
session_start();
if(!isset($_SESSION['user_id']))
	header("Location: ../knoma/login_signup_c.php?Can't go back");
include 'q/dbconn.php';
$cp=mysqli_real_escape_string($conn,$_POST['cp']);
if(empty($cp)){
    header("Location: ../logined.php?attributes=empty");
	exit();
}else{
	$sql="INSERT INTO page (page_name) values ('$cp');";
	mysqli_query($conn,$sql);
	header("Location: ../knoma/logined.php?page=created");
	exit();
}
?>