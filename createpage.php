<?php
include_once 'q/dbconn.php';
session_start();
if(!isset($_SESSION['user_id']))
	header("Location: ../knoma/login_signup_c.php?Can't go back");
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
<div style="float: left;">
<form action="createpage.php">
<input type='submit' name='create page' class='button button1' style="font-family:Cambria;" value='ADD PAGE'>
</form>
</div>
<div class="dropdown" style="float: right;;">
  <button class="button button1" style="font-family:Cambria;">SETTINGS</button>
  <div class="dropdown-content">
    <a href="help.html" style="font-family:Cambria;">Help</a>
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
    echo "<h2 style='font-family:cambria;'>Enter page name: </h2>";
	echo "<br>";
    echo "<form action='createp.php' method='post'>
    <input type='text' name='cp' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='Name of the page...'>
    <input type='submit'class='button button1' style='font-family:Cambria;'  value='CREATE PAGE'>
    </form>";
?> 
 </div>
</div>
</div>


</body>
</html>