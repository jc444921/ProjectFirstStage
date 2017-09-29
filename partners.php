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

</head>
<body>

<div class="header">
<img src="Images/LOGO for team 2.png" alt="logo">
    <p>
  <h1 style="font-size:250%" id="top">Rental House</h1>
	<?php include("include/nav.inc")?></p>
</div>

    <h2 style="font-size: 190%"><b>Our proud partners</b></h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li><a href="apartment.php">• Go to Rent</a></li>
    <li><a href="Homestay.php">• Homestay</a></li>
    <li><a href="CommunicationBar.php">• Communication Bar</a></li>
    <li><a href="notice.php">• Support</a></li>
    <li style="padding-left:7%">• Go to About Us</li>
    <ul>
        	<li><a href="AboutUs.php" style="padding-left:15%">Contact Us</a></li>
            <li><a href="achievements.php" style="padding-left:15%">Achievements</a></li>
            <li><a href="link.php" style="padding-left:15%">Link</a></li>
            <li><a href="partners.php" style="padding-left:15%">Partners</a></li>
        </ul>
  </ul>
</div>

<div class="col-9">
  <h1>In association with ~</h1>
  <p style="clear:both;">
  <br>
 <br><a href="https://www.brisbane.qld.gov.au/"><img src="Images/Citycouncil.png" alt="citycouncil" style="width:15%; height:30%;"></a>
 	<a href="http://www.newscorpaustralia.com/brand/sunday-mail"><img src="Images/Sundaymail.png" alt="sundaymail" style="width:15%; height:30%;"></a>
 <a href="https://www.goodlifehealthclubs.com.au/"><img src="Images/Goodlife.png" alt="goodlife" style="width:15%; height:30%;"></a>
  <br>

  </p>
  <br>
  <br>

      <h1>Other partner sites</h1>
  <p>Fellow rental accomodation partners we network with: 
<br>
<a href="https://www.domain.com.au/">Domain.com</a>| <a href="https://www.seek.com.au/">Seek.com</a> | <a href="https://flatmates.com.au/">Flatmates.com</a>
    </p>

</div>
</div>
<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>

</div>
</body>
</html>