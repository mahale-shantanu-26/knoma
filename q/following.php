<?php
session_start();
if(!isset($_SESSION['user_id']))
	header("Location: ../knoma/login_signup_c.php?Can't go back");
include 'dbconn.php';
/*$sql="SELECT f_people.follower_id,users.username,users.occupation FROM users INNER JOIN f_people ON f_people.followee_id=users.userid";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	if($row['follower_id']==$_SESSION['user_id']){
		echo $row['username'],$row['occupation'];
		echo "<br>";
	}
}*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Home - KnowMa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url("button.css");
@import url("body.css");
@import url("top_nav.css");
@import url("link.css");
</style>
</head>
<body>
<div class = "topnav">
<img src = "../Knowma.jpg" width = 107 height = 40 style = "float:left; margin-top: 7px;">
<div style = "float:left;">
<a href="../logined.php" class='button button1' style="font-family:Cambria;">HOME</a>
</div>

<div style="float:left;">
<form action='q/askques.php' method='POST'>
<input type="text" name="askques" placeholder="Ask Question..." style="font-family:Cambria;">
<select name="askpage" id="soflow" style="font-family:Cambria;">
<?php
$sql="SELECT * FROM page";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    $page=$row['page_name'];
    echo "<option value='$page'>$page</option>";
}
?>
</select>
<input type='submit' name='askp' class='button button1' style="font-family:Cambria;" value='SUBMIT'>
</form>
</div>

<div style="float:left;">
<form action="../createpage.php" method='POST'>
<input type='submit' name='create page' class='button button1' style="font-family:Cambria;" value='CREATE PAGE'>
</form>
</div>

<div class="dropdown" style="float: right;;">
  <button class="button button1" style="font-family:Cambria;">SETTINGS</button>
  <div class="dropdown-content">
    <a href="../help.html" style="font-family:Cambria;">Help</a>
    <a href="../user_details.php" style="font-family:Cambria;">Profile</a>
    <a href="../logout.php" style="font-family:Cambria;">Logout</a>
  </div>
</div>


</div>


<div class="row">

<div class="leftcolumn">
  <div class="card">
  <br>
<a href="findpeople.php" style="font-family:Cambria; font-size:18px;">FIND PEOPLE</a><br><br>
<a href="findpages.php" style="font-family:Cambria; font-size:18px;">FIND PAGES</a><br><br>
<a href="following.php" style="font-family:Cambria; font-size:18px;">FOLLOWING</a><br><br>
<a href="followingpages.php" style="font-family:Cambria; font-size:18px;">PAGES</a><br><br>
<a href="followers.php" style="font-family:Cambria; font-size:18px;">FOLLOWERS</a><br><br>
  </div>
  
</div>


<div class="rightcolumn">
  <div class="card">
  <?php
  echo "<h3 style='font-family:cambria;'>People you Follow</h3><hr><br>";
  $i=1;
 $r="SELECT f_people.follower_id,f_people.followee_id,users.username,users.occupation,users.name FROM users INNER JOIN f_people ON f_people.followee_id=users.user_id";
 $rr=mysqli_query($conn,$r);
 while($rrr = mysqli_fetch_assoc($rr)){
			 if($rrr['follower_id']==$_SESSION['user_id']){
				 $ii=$rrr['followee_id'];
        		 $nama=$rrr['name'];
				 $pp=$rrr['username'];
				 $qq=$rrr['occupation'];
			 echo "<a href='details.php?var=$ii' style='font-family:Cambria; font-size:18px;'><B>$nama</B></a>
			 <font face = 'Cambria'>is a $qq <form action='following.php' method='POST'>
        <input type=submit name=$ii class='buttonz button1' value=UNFOLLOW style='font-family:Cambria; font-size:15px; float:right;'>
		</form>
		<br>
        Username: <a href='' style='font-family:Cambria; font-size:18px;'><B>$pp</B></a>
        <br><br><hr>
			 ";
			 if(isset($_POST[$ii])){
				$_SESSION['unfoll']=$ii;
				$_SESSION['unfol_un']=$pp;
				header('Location: unfindp.php');
			}
			 echo "<br>";
			 $i++;
		  }		 
	 }
  
?>
  </div>
</div>
</div>

</body>
</html>


