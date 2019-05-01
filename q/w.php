<?php
include_once 'asd.php';
$username=$_POST['username'];
$name=$_POST['name'];
$passwordd=$_POST['passwordd'];
$email=$_POST['email'];
$occupation=$_POST['occupation'];
$phone_number=$_POST['phone_number'];
$age=$_POST['age'];
$birthdate=$_POST['birthdate'];
$gender=$_POST['gender'];
$sql="INSERT INTO users (username,name,passwordd,email,occupation,phone_number,age,birthdate,gender) values('$username','$name','$passwordd','$email','$occupation','$phone_number','$age','$birthdate','$gender');";
mysqli_query($conn,$sql);

header("Location: ../login_signup.php?signup=success");
?>
