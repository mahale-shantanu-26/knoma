<!DOCTYPE html>
<html>
<head>
<title>KnowMa</title>
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

.header {
    padding: 0.25px;
    font-size: 40px;
    text-align: center;
    background: white;
}

.leftcolumn {   
    float: left;
    width: 50%;
}

.rightcolumn {
    float: left;
    width: 50%;
    padding-left: 15px;
}

.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

.card {
     background-color: white;
     padding: 20px;
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
</style>
</head>
<body>

<div class = "header">
<h4 style="font-family:cambria;">KnowMa - The Knowledge Market!</h4>
<hr width = 900>
<form>
<a href="about.html" class="button button1" style="font-family:Cambria;">ABOUT</a>
<a href="help.html" class="button button1" style="font-family:Cambria;">HELP</a>
<a href="contact.html" class="button button1" style="font-family:Cambria;">CONTACT AND SUPPORT</a>
</form>
<hr width = 1300 color=white> 
</div>


<div class="row">

  <div class="leftcolumn">
    <div class="card">
    
    <h2 style="font-family:cambria;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>SIGN UP</u></h2>
        <br>
			<form action = "q/signup.php" method="POST"><pre>
		<b><font face='cambria' size=4>Name</font></b>	<input type="text"	name="name"	size='30' />
            
		<b><font face='cambria' size=4>Email</font></b>	<input type="email" name="email" size='30'/>
				
        <b><font face='cambria' size=4>Mobile No.</font></b>	<input type="number" name="phone_number" size='30'/>
				
        <b><font face='cambria' size=4>Occupation</font></b>	<input type="text"	name="occupation"	size='30' />
                
        <b><font face='cambria' size=4>Date of Birth</font></b>	<input type="date"	name="birthdate"	size='40' />
                
        <b><font face='cambria' size=4>          Age</font></b>	<input type="number"	name="age"	size='30' />
                
        <b><font face='cambria' size=4>       Gender</font></b>	
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="others">Others
                
        <b><font face='cambria' size=4>Username</font></b>	<input type="text"	name="username"	size='30' />
                
        <b><font face='cambria' size=4>Password</font></b>	<input type="password"	name="passwordd"	size='30' />
                
				<input type="submit" name="submitsu" class="buttonz button1" value="SIGN UP" style="font-family:Cambria;">
            </pre></form>  
    </div>
    
  </div>
  
  

  <div class="rightcolumn">
    <div class="card">
    
    			<h2 style="font-family:cambria;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>LOGIN</u></h2>
                <br>
            <form action = "q/login.php" method="POST"><pre>
        <b><font face='cambria' size=4>Email</font></b>	        <input type="email"	name="email"	size='30'/>
        <br>
        <b><font face='cambria' size=4>Password</font></b>	<input type="password" name="passwordd" size='30'/>
				<BR>
		                <input type="submit" name="submitlo" class="buttonz button1" value="LOG IN" style="font-family:Cambria;">
            <br>
        <a href="student_forgot.php" style="font-family:Cambria;" >Forgot password?</a>
            </pre></form>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
  </div>
</div>

</body>
</html>
