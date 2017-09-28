<?php
session_start();
include_once('include/config.php');
	if (isset($_SESSION['valid_user'])) {
		header("location: member_only.php");
	}
	
	//make the database connection
	$conn  = db_connect();
	     
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $email = $conn -> real_escape_string($_POST['email']);
      $password = $conn -> real_escape_string($_POST['password']); 
     	  
	  //make a query to check if user login successfully
	  $sql = "select * from users where email='$email' and password='$password'";
	  $result = $conn -> query($sql);
	  $numOfRows = $result -> num_rows;
	  $row = $result -> fetch_assoc();
	  if ($numOfRows == 1) {
         $_SESSION['valid_user'] = $email;
		 $_SESSION['name'] = $row['name'];         
         header("location: member_only.php");
      }else {
		  $error = 'Your Login Name or Password is invalid';
      }
   }

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rental House</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link href="css/rental.css" rel="stylesheet" type="text/css">
<script src="js/nav.js"></script>
<script src="js/member.js"></script>
<link rel="stylesheet" href="css/nav_responsive.css" type="text/css">
<?php include("include/nav.inc")?>


</head>
<body>

<div class="header">
<img src="Images/LOGO for team 2.png" alt="logo">
  <h1 style="font-size:250%" id="top">Rental House</h1>
</div>

    <h2 style="font-size: 190%"><b>Welcome to Blackboard!</b></h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li><a href="#">• Go to Rent</a></li>
    <li><a href="#">• Homestay</a></li>
    <li><a href="#">• Communication Bar</a></li>
    <li><a href="notice.html">• Support</a></li>
    <li><a href="#">• About Us</a></li>
  </ul>
</div>

<div class="col-9" >
<div class="member_frm" style="margin-left:20%;">
<h2 style="margin-left:13%;">Sign up now!</h2>
<p><i>Fields marked with an asterisk (*) must be entered.</i></p>
<form action="member_process.php" method="post">
	<div class="row">
		<div class="col-s-12 col-12">
        	<label for="name">* Name:</label>
            <input type="text" id="name" name="name" size="30" maxlength="50"
            	onBlur="changeColor(id, 'white')"
                onFocus="changeColor(id, 'seaShell')" required />
        </div>
	</div>
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label for="email">* Email:</label>
            <input type="email" id="email" name="email" size="30" maxlength="50"
                onBlur="changeColor(id, 'white')"
                onFocus="changeColor(id, 'seaShell')" required />
        </div>
    </div>
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label for="password">* Password:</label>
            <input type="password" id="password" name="password" size="20" maxlength="20"
                onBlur="changeColor(id, 'white')"
                onFocus="changeColor(id, 'seaShell')" required />
            <span id="pwd_msg" class="error_msg"></span>
        </div>
    </div>
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label for="rePassword">* Re-try:</label>
            <input type="password" id="rePassword" size="20" maxlength="20"
                onChange="checkRePassword(document)"
                onBlur="changeColor(id, 'white')"
                onFocus="changeColor(id, 'seaShell')" />
        </div>
    </div>
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label for="zip">* Postcode:</label>
            <input type="text" id="zip" size="10" maxlength="10" placeholder="4 digits"
                onChange="checkZIPCode(document)"
                onBlur="changeColor(id, 'white')"
                onFocus="changeColor(id, 'seaShell')" />
            <span class="error_msg" id="zip_msg"></span>
        </div>
    </div>
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label>&nbsp;</label>
            <input type="submit" id="submit" value="Submit" 
            	onClick="return validateInfo(document)" />
            <input type="reset" id="reset" value="Clear Form" onClick="reset_frm(document)" />
        </div>
    </div>            
</form>
</div>
<div class="row" id="footer">
    <div class="col-s-12 col-12" id="footer-col1"></div>
</div>
 
<div class="member_frm " style="margin-left:20%;">
<h2 style="margin-left:13%;">Sign in now!</h2>
<p>Please enter your email and password</p>
<form action="login.php" method="post">
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label for="email">Email:</label>
            <input type="email" id="email" name="email" size="35" maxlength="50" 
            	onBlur="changeColor(id, 'white')"
                onFocus="changeColor(id, 'seaShell')" required />
        </div>
    </div>
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label for="password">Password:</label>
            <input type="password" id="password" name="password" size="20" maxlength="20" 
            	onBlur="changeColor(id, 'white')"
                onFocus="changeColor(id, 'seaShell')" required />
        </div>
    </div>
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label>&nbsp;</label>
            <input type="submit" id="submit" value="Submit" />
            <input type="reset" id="reset" value="Clear" />
        </div>
    </div>
    <?php 
	if(isset($error)) {
		echo "<p style=\"color: red;\">$error</p>";
		unset($error);
	}
?>
            
</form>
</div>
<br>
<br>
<br>
<br>
<br>
     
  

  
  
<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>


</body>
</html>