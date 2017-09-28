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

    <h2 style="font-size: 190%"><b>ABOUT US</b></h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li style="padding-left:7%">• Rent</li>
    <li><a href="#">• Homestay</a></li>
    <li><a href="#">• Communication Bar</a></li>
    <li><a href="notice.html">• Support</a></li>
    <li><a href="#">• About Us</a></li>
    	<ul>
        	<li><a href="apartment.php" style="padding-left:15%">Contact Us</a></li>
            <li><a href="house.php" style="padding-left:15%">Achievements</a></li>
            <li><a href="townhouse.php" style="padding-left:15%">Link</a></li>
            <li><a href="villa.php" style="padding-left:15%">Partners</a></li>
        </ul>
  </ul>
</div>

<div class="col-9">
  <h1>Contact Us</h1>
  <p><b class="smalltitle" id="increase">Head Office</b>
<br>
<br>We are located in the heart of Brisbane CBD, on the top floor of James Cook University 
<br>Address: 
Level 11, 349 Queen Street Brisbane QLD 4000 AUSTRALIA
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.086094403293!2d153.02718551557473!3d-27.46657892314723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a1d064dcb2f%3A0x7f3aed61f0bfd9e3!2sJames+Cook+University%2C+Brisbane+Campus!5e0!3m2!1sen!2sau!4v1501473138677" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <p style="float:right;"><a href="#top"> -TOP- </a></p>
    </p>
<br>Follow us on <a href="https://www.facebook.com/pg/Rental-House-376641079422439/posts/?ref=page_internal"><img src="facebook.png"alt="facebook" style="width:6%; height:6%;"></a> <a href="https://www.instagram.com/team_0217/"><img src="instagram.png" alt="instagram" style="width:6%; height:6%;"></a>
</div>
</div>
<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>