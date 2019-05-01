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
  <form action='change_p.php' method='post'>
    <input type='submit'class='button button1' style='font-family:Cambria;float:right'  value='BACK'><br>
    </form>
  <?php
echo "<h2 style='font-family:cambria;'>Change Profile </h2>
<hr>
<font face = 'Cambria' size=5>";
if(isset($_POST['ch_name'])){
    echo"<h4 style='font-family:cambria;'>Name </h4>
    <form action='ch/cha_pro1.php' method='post'>
    <input type='text' name='c1' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='Name...'>
    <input type='submit'class='button button1' style='font-family:Cambria;'  value='CHANGE NAME'>
    </form>";
}
if(isset($_POST['ch_username'])){
    echo"<h4 style='font-family:cambria;'>Username </h4>
    <form action='ch/cha_pro2.php' method='post'>
    <input type='text' name='c2' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='Username...'>
    <input type='submit'class='button button1' style='font-family:Cambria;'  value='CHANGE USERNAME'>
    </form>";
}
if(isset($_POST['ch_email'])){
    echo"<h4 style='font-family:cambria;'>Email Address </h4>
    <form action='ch/cha_pro3.php' method='post'>
    <input type='text' name='c3' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='New Email...'>
    <input type='submit'class='button button1' style='font-family:Cambria;'  value='CHANGE EMAIL'>
    </form>";
}
if(isset($_POST['ch_occ'])){
    echo"<h4 style='font-family:cambria;'>Occupation </h4>
    <form action='ch/cha_pro4.php' method='post'>
    <input type='text' name='c4' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='Occupation...'>
    <input type='submit'class='button button1' style='font-family:Cambria;'  value='CHANGE OCCUPATION'>
    </form>";
}
if(isset($_POST['ch_mob'])){
    echo"<h4 style='font-family:cambria;'>Mobile Number </h4>
    <form action='ch/cha_pro5.php' method='post'>
    <input type='number' name='c5' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='New Mobile Number...'>
    <input type='submit'class='button button1' style='font-family:Cambria;'  value='CHANGE MOBILE'>
    </form>";
}
if(isset($_POST['ch_age'])){
    echo"<h4 style='font-family:cambria;'>Age </h4>
    <form action='ch/cha_pro6.php' method='post'>
    <input type='number' name='c6' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='Age...'>
    <input type='submit'class='button button1' style='font-family:Cambria;'  value='CHANGE AGE'>
    </form>";
}
if(isset($_POST['ch_bd'])){
    echo"<h4 style='font-family:cambria;'>Birthdate </h4>
    <form action='ch/cha_pro7.php' method='post'>
    <input type='date' name='c7' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='Birthdate...'>
    <input type='submit'class='button button1' style='font-family:Cambria;'  value='CHANGE BIRTHDATE'>
    </form>";
}
if(isset($_POST['ch_gen'])){
    echo"<h4 style='font-family:cambria;'>Gender </h4>
    <form action='ch/cha_pro8.php' method='post'>
    <input type='radio' name='gender' value='male'>Male<br>
    <input type='radio' name='gender' value='female'>Female<br>
    <input type='radio' name='gender' value='others'>Others<br><br>
    <input type='submit'class='button button1' style='font-family:Cambria;'  value='CHANGE GENDER'><br>
    </form>";
}
?>

  </div>
</div>
</div>


</body>
</html>
