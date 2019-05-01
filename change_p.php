<?php
session_start();
if(!isset($_SESSION['user_id']))
	header("Location: ../knoma/login_signup_c.php?Can't go back");
include 'q/dbconn.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Home - KnowMa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url("q/button.css");
@import url("q/body.css");
@import url("q/top_nav.css");
@import url("q/link.css");

</style>
</head>
<body>

<div class = "topnav">
<img src = "Knowma.jpg" width = 107 height = 40 style = "float:left; margin-top: 7px;">
<div style = "float:left;">

<a href="logined.php" class="button button1" style="font-family:Cambria;">HOME</a>
</div>

<div style="float:left;">
<form action='q/askques.php' method='POST'>
<input type="text" name="askques" style="font-family:Cambria;" placeholder="Ask Question...">
<select name="askpage" id="soflow" style="font-family:Cambria;">
<option value=0>Select page:</option>; 
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
<form action="createpage.php" method='POST'>
<input type='submit' name='create page' class='button button1' style="font-family:Cambria;" value='CREATE PAGE'>
</form>
</div>

<div class="dropdown" style="float: right;;">
  <button class="button button1" style="font-family:Cambria;">SETTINGS</button>
  <div class="dropdown-content">
    <a href="help.php"  style="font-family:Cambria;">Help</a>
    <a href="user_details.php" style="font-family:Cambria;">Profile</a>
    <a href="logout.php" style="font-family:Cambria;">Logout</a>
  </div>
</div>


</div>


<div class="row">

<div class="leftcolumn">
  <div class="card">
  <br>
<a href="q/findpeople.php" style="font-family:Cambria; font-size:18px;">FIND PEOPLE</a><br><br>
<a href="q/findpages.php" style="font-family:Cambria; font-size:18px;">FIND PAGES</a><br><br>
<a href="q/following.php" style="font-family:Cambria; font-size:18px;">FOLLOWING</a><br><br>
<a href="q/followingpages.php" style="font-family:Cambria; font-size:18px;">PAGES</a><br><br>
<a href="q/followers.php" style="font-family:Cambria; font-size:18px;">FOLLOWERS</a><br><br>
  </div>
  
</div>


<div class="rightcolumn">
  <div class="card">
  
  <?php
echo "<h2 style='font-family:cambria;'>Profile </h2><hr><font face = 'Cambria' size=5><br>";
echo '
<table align=center cellspacing=0 cellpadding=0 border="1" width="95%" bordercolor="#fff">
	<tr align=center>
	<td width="120" height="50">User ID</td>
	<td width="120" height="50">'.$_SESSION["user_id"].'</td>
</tr>
<tr align=center>
	<td width="120" height="50">Name</td>
    <td width="120" height="50">'.$_SESSION['user_name'].'</td>
    <td width="120" height="50">
    <form action="change_pro.php" method="post">
<input type="submit" class="button button1" style="font-family:Cambria;float:right;" name="ch_name"  value="CHANGE">
    </form></td>
</tr>
<tr align=center>
	<td width="120" height="50">Username</td>
    <td width="120" height="50">'.$_SESSION["user_username"].'</td>
    <td width="120" height="50">
    <form action="change_pro.php" method="post">
<input type="submit" class="button button1" style="font-family:Cambria;float:right;" name="ch_username"  value="CHANGE">
    </form></td>
</tr>
<tr align=center>
	<td width="120" height="50">Email ID</td>
    <td width="120" height="50">'.$_SESSION["user_email"].'</td>
    <td width="120" height="50">
    <form action="change_pro.php" method="post">
<input type="submit" class="button button1" style="font-family:Cambria;float:right;" name="ch_email" value="CHANGE">
    </form></td>
</tr>
<tr align=center>
	<td width="120" height="50">Occupation</td>
    <td width="120" height="50">'.$_SESSION["user_occupation"].'</td>
    <td width="120" height="50">
    <form action="change_pro.php" method="post">
<input type="submit" class="button button1" style="font-family:Cambria;float:right;" name="ch_occ" value="CHANGE">
    </form></td>
</tr>
<tr align=center>
	<td width="120" height="50">Mobile No.</td>
    <td width="120" height="50">'.$_SESSION["user_mobile"].'</td>
    <td width="120" height="50">
    <form action="change_pro.php" method="post">
<input type="submit" class="button button1" style="font-family:Cambria;float:right;" name="ch_mob" value="CHANGE">
    </form></td>
</tr>
<tr align=center>
	<td width="120" height="50">Age</td>
    <td width="120" height="50">'.$_SESSION["user_age"].'</td>
    <td width="120" height="50">
    <form action="change_pro.php" method="post">
<input type="submit" class="button button1" style="font-family:Cambria;float:right;" name="ch_age"  value="CHANGE">
    </form></td>
</tr>
<tr align=center>
	<td width="120" height="50">Birthdate</td>
    <td width="120" height="50">'.$_SESSION["user_birthdate"].'</td>
    <td width="120" height="50">
    <form action="change_pro.php" method="post">
<input type="submit" class="button button1" style="font-family:Cambria;float:right;" name="ch_bd" value="CHANGE">
    </form></td>
</tr>
<tr align=center>
	<td width="120" height="50">Gender</td>
    <td width="120" height="50">'.$_SESSION["user_gender"].'</td>
    <td width="120" height="50">
    <form action="change_pro.php" method="post">
<input type="submit" class="button button1" style="font-family:Cambria;float:right;" name="ch_gen" value="CHANGE">
    </form></td>
</tr>
</table>';
?>

  </div>
</div>
</div>


</body>
</html>
