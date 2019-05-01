<?php
include_once 'dbconn.php';
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
  echo "<h3 style='font-family:cambria;'>Profile</h3><hr>";
  $as=mysqli_real_escape_string($conn,$_GET['var']);
  $r="SELECT username,name,occupation,email,birthdate,gender,age FROM users WHERE user_id=$as";
$rr=mysqli_query($conn,$r);
$rrr = mysqli_fetch_assoc($rr);
$un=$rrr['username'];
$na=$rrr['name'];
$oc=$rrr['occupation'];
$em=$rrr['email'];
$bd=$rrr['birthdate'];
$ge=$rrr['gender'];
$ag=$rrr['age'];
echo "<font face = 'Cambria' size=4><br>";
echo "Username  : ".$un."<br><br>";
echo "Name      : ".$na."<br><br>";
echo "Occupation: ".$oc."<br><br>";
echo "Email     : ".$em."<br><br>";
echo "Birthdate : ".$bd."<br><br>";
echo "Gender    : ".$ge."<br><br>";
echo "Age       : ".$ag."<br><br>";


  ?>
  </div>

  <div class="card">
  <?php 
  echo "<h3 style='font-family:cambria;'>Questions asked</h3><hr><br>";
  $as=mysqli_real_escape_string($conn,$_GET['var']);
  $r="SELECT question,quesid FROM questions WHERE askedby=$as";
$rr=mysqli_query($conn,$r);
while($rrr = mysqli_fetch_assoc($rr)){
    $ii=$rrr['quesid'];
    $ques=$rrr['question'];
    echo "<a href='../a.php?var=$ii' style='font-family:Cambria; font-size:18px;'><B>$ques</B></a><br><br>";
}
  ?>
  </div>

  <div class="card">
  <?php 
  echo "<h3 style='font-family:cambria;'>Questions Answered</h3><hr><br>";
  $as=mysqli_real_escape_string($conn,$_GET['var']);
  $r="SELECT answered_by,ans_id,quesid,answer FROM answers WHERE answered_by=$as";
$rr=mysqli_query($conn,$r);
while($rrr = mysqli_fetch_assoc($rr)){

    $ij=$rrr['ans_id'];
    $ii=$rrr['quesid'];
    $answer=$rrr['answer'];
    $a="SELECT question FROM questions WHERE quesid=$ii";
    $rrs=mysqli_query($conn,$a);
    $rrss = mysqli_fetch_assoc($rrs);
    $ques=$rrss['question'];
    echo "<a href='../a.php?var=$ii' style='font-family:Cambria; font-size:18px;'><B>$ques</B></a><br><br>
    Answer:<br>
    $answer
    <br><br><br>";
}
  ?>
  </div>
</div>
</div>

</body>
</html>
