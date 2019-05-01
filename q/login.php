<?php
session_start();

if(isset($_POST['submitlo'])){
	include 'dbconn.php';
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $passwordd=mysqli_real_escape_string($conn,$_POST['passwordd']);	
	
	if(empty($email)||empty($passwordd)){
		header("Location: ../login_signup_c.php?login=empty");
	    exit();
		
	}else{
		$sql="SELECT * FROM users WHERE email='$email'";
		$result= mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck<1){
			header("Location: ../login_signup_c.php?login=errorx");
	        exit();
		}else{
			if($row=mysqli_fetch_assoc($result)){
				$hashedpwdcheck=password_verify($passwordd,$row['passwordd']);
				if($passwordd == false){
					header("Location: ../login_signup_c.php?login=erro1r");
	                exit();
				     	
				}elseif($passwordd == true){
					$_SESSION['user_id']=$row['user_id'];
					$_SESSION['user_name']=$row['name'];
					$_SESSION['user_username']=$row['username'];
					$_SESSION['user_email']=$row['email'];
					$_SESSION['user_occupation']=$row['occupation'];
					$_SESSION['user_mobile']=$row['phone_number'];
					$_SESSION['user_age']=$row['age'];
					$_SESSION['user_birthdate']=$row['birthdate'];
					$_SESSION['user_gender']=$row['gender'];
					header("Location: ../logined.php?login=success");
	                exit();
				    	
				}
				
			}
			
		}
    }
}else{
	header("Location: ../login_signup_c.php?login=error");
	exit();
}
	