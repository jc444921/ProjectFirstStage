<?php
session_start();
include_once('include/config.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rental House</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link href="css/rental.css" rel="stylesheet" type="text/css">
<script src="js/nav.js"></script>
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

<div class="col-9">
<h1>Haven't got an account?</h1>
<form action="" method="post">
	<table border="0">
   <tr>
	<td align="right">* Name:</td>
    <td><input type="text" id="name" name="name"> </td>
    <td id ="name_msg" style="color:red;"><br></td>"
   </tr>
   <tr>
     <td align="right">* Password:</td>
     <td><input type="Password" id="password" name="password" onChange="checkName(document)"  ></td>
     <td id="pwd_msg" style="color:red;"></td>
    </tr>
   <tr>
    <td align="right">* Re-try:</td>
    <td><input type="password" id="rePassword" name="rePassword" onChange="chenckRePassword(document)"></td>
    </tr>
    
    <tr>
    <td align="right"><input type="submit" name="submit" value="Submit"></td>
    <td><input type="reset" name="reset" value="Clear"></td>
    </tr>
    </table>
    </form>
  <h1>Already have an account?</h1><form action="" method="post">
	<table border="0">
   <tr>
	<td align="right">* Name:</td>
    <td><input type="text" id="name" name="name"> </td>
    <td id ="name_msg" style="color:red;"><br></td>"
   </tr>
   <tr>
     <td align="right">* Password:</td>
     <td><input type="Password" id="password" name="password" onChange="checkName(document)"  ></td>
     </tr><td align="right"><input type="submit" name="submit" value="Submit"></td>
    <td><input type="reset" name="reset" value="Clear"></td>
     </tr>
     </table>
     </form>
     
     <form action="" method="post" class="STYLE-NAME">
<h1>Wanna leave a comment?</h1></tr>
<label></tr>
<span>User Name :</span>
<input id="name" type="text" name="name" placeholder="Your Full Name" />
</label>
<label>
<span>Password :</span>
<input id="email" type="email" name="email" placeholder="enter your password" />
</label>
<label></tr>
<span>Message :</span>
<textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
</label>
<label>
<span>Subject :</span><select name="selection">
<option value="Job Inquiry">Rent</option>
<option value="General Question">Homestay</option>
<option value="Job Inquiry">Communication Bar</option>
<option value="Job Inquiry">Support</option>
<option value="Job Inquiry">About us</option>
</select>
</label>
<label>
<span>&nbsp;</span>
<input type="button" class="button" value="Send" />
</label>
</form>
  
  
<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>


</body>
</html>