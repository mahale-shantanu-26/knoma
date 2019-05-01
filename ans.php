<?php
session_start();
if(!isset($_SESSION['user_id']))
	header("Location: ../knoma/login_signup_c.php?Can't go back");
include 'q/dbconn.php';
$answer=mysqli_real_escape_string($conn,$_POST['answerr']);
if(empty($answer)){
    header("Location: ../logined.php?attributes=empty");
	exit();	
}else{
	$sql="INSERT INTO answers (answer,answered_by,quesid,date_of_ans) values ('$answer','".$_SESSION['user_id']."','".$_SESSION['answ']."',CURDATE());";
	mysqli_query($conn,$sql);
	header("Location: ../knoma/logined.php?answer=posted");
	exit();
}
?>
