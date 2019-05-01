<?php
if (isset($_POST['submitsu']))
{
	include_once 'dbconn.php';
	$username=mysqli_real_escape_string($conn,$_POST['username']);
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $passwordd=mysqli_real_escape_string($conn,$_POST['passwordd']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $occupation=mysqli_real_escape_string($conn,$_POST['occupation']);
    $phone_number=mysqli_real_escape_string($conn,$_POST['phone_number']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $birthdate=mysqli_real_escape_string($conn,$_POST['birthdate']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
	
	//Error handlers
	//Check for empty fields
	if(empty($username)||empty($name)||empty($passwordd)||empty($email)||empty($occupation)||empty($phone_number)||empty($age)||empty($birthdate)||empty($gender))
	{
	    header("Location: ../login_signup_c.php?signup=empty");
	    exit();
	}else
	{
		if(!preg_match("/^[a-zA-Z]*$/",$name))
		{
		    header("Location: ../login_signup_c.php?signup=nope");
	        exit();	
		}else
		{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../login_signup_c.php?signup=nope");
	            exit();
			}else
			{
				$sql="SELECT * FROM users WHERE username='$username'";
				$result=mysqli_query($conn,$sql);
				$resultcheck=mysqli_num_rows($result);
				if($resultcheck>0)
				{
					header("Location: ../login_signup_c.php?signup=usertaken");
	                exit();
			    
				}
				else
				{
					//hashing the password
					//$hashedpwd=password_hash($passwordd,PASSWORD_DEFAULT);
					//Insert the user in the database
					$sql="INSERT INTO users (username,name,passwordd,email,occupation,phone_number,age,birthdate,gender) values('$username','$name','$passwordd','$email','$occupation','$phone_number','$age','$birthdate','$gender');";
				    mysqli_query($conn,$sql);
					header("Location: ../login_signup_c.php?signup=success");
	                exit();
					
				}
			}
		}
	}
}else{
	header("Location: ../login_signup_c.php");
	exit();
}