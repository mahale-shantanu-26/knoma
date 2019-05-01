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
* {
    box-sizing: border-box;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 24px;
    text-align: center;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
top:2000px;
-webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
}
body {
    font-family: Arial;
    padding: 10px;
    background: #bfbfbf;
}

.leftcolumn {   
    float: left;
    width: 20%;

}

.rightcolumn {
    float: right;
    width: 80%;
    padding-left: 15px;
}

.card {
     background-color: white;
     padding: 30px;
     margin-top: 15px;
}


.row:after {
    content: "";
    display: table;
    clear: both;
}

.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

.buttonz {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 7.5px 18px;
    text-align: center;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
top:2000px;
-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button1 {
    background-color: #4CAF50; 
    color: white; 
    border: 2px solid #4CAF50;
}

.button1:hover {
background-color: white;
    color: black;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  display: block;
  color: #f2f2f2;
  padding: 10px 24px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}


.topnav input[type=text] {
width: 600px;
  padding: 10px;
  margin-top: 4px;
  margin-left: 15px;
  font-size: 17px;
  border: 4px 2px;
  border-radius: 4px;
}



@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

</style>
</head>
<body>

<div class = "topnav">
<div style = "float:left;">
<a href="logined.php" class="button button1" style="font-family:Cambria;">HOME</a>
</div>

<div style="float:left;">
<form action='q/askques.php' method='POST'>
<input type="text" name="askques" placeholder="Ask Question...">
<select name="askpage">
<?php
$sql="SELECT * FROM page";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    $page=$row['page_name'];
    echo "<option value='$page'>$page</option>";
}
?>
</select>
<input type='submit' name='askp' class='button button1' value='Submit'>
</form>
</div>
<div style="float: left;">
<form action="createpage.php">
<input type='submit' name='create page' class='button button1' value='Add page'>
</form>
</div>
<div class="dropdown" style="float: right;;">
  <button class="button button1" style="font-family:Cambria;">SETTINGS</button>
  <div class="dropdown-content">
    <a href="help.html" class="button button1" style="font-family:Cambria;">HELP</a>
    <a href="user_details.php" style="font-family:Cambria;">Profile</a>
    <a href="logout.php" style="font-family:Cambria;">Logout</a>
  </div>
</div>


</div>


<div class="row">

<div class="leftcolumn">
  <div class="card">
  <br>
<a href="q/findpeople.php" style='text-decoration:none'>Find People</a><br><br>
<a href="q/findpages.php" style='text-decoration:none'>Find Pages</a><br><br>
<a href="q/following.php" style='text-decoration:none'>Following</a><br><br>
<a href="q/followingpages.php" style='text-decoration:none'>Pages</a><br><br>
<a href="q/followers.php" style='text-decoration:none'>Followers</a><br><br>
  </div>
  
</div>




<?php
$ans=mysqli_real_escape_string($conn,$_GET['var']);
$a="SELECT * FROM answers";
$aa=mysqli_query($conn,$a);
$b="SELECT * FROM questions";
$bb=mysqli_query($conn,$b);
while($bbb=mysqli_fetch_assoc($bb)){
     if($bbb['quesid']==$ans){
		$_SESSION['ans']=$ans;
        echo "<div class='rightcolumn'><div class='card'><form action='answers.php' method='POST'><h1>".$bbb['question']."</h1><input type='submit' name='answers1' class='button button1' value='Answer this question'></form></div></div>";
		echo "<br>";
		echo "<br>";
     }	 
	
}
while($aaa=mysqli_fetch_assoc($aa)){
	if($aaa['quesid']==$ans){
	    echo "<div class='rightcolumn'><div class='card'>".$aaa['answer']."</div></div>";
        echo "<br><br>";		
	}
}
?>
</div>


</body>
</html>