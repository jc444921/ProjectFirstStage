<?php
session_start();
include_once('include/config.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <h2 style="font-size: 190%">Welcome to see some<strong>Agreement Models</strong>.</h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li><a href="apartment.php">• Go to Rent</a></li>
    <li><a href="Homestay.php">• Homestay</a></li>
    <li><a href="CommunicationBar.php">• Communication Bar</a></li>
    <li>• Support</li>
    <ul>
    <li><a href="notice.php" style="padding-left:7%">Notice for Rental</a></li>
    <li><a href="legalagent.php" style="padding-left:7%">Legal Agent Support</a></li>
    <li style="padding-left:7%">Agreement Form Models</a></li>
    <li><a href="secondhand.php" style="padding-left:7%">Second Hand Requirements</a></li>
    </ul>
    <li><a href="AboutUs.php">• About Us</a></li>
  </ul>
</div>


<div class="col-9">
  <h1>Form for Rental House</h1>
  <p><a href="RTA-entry-condition-report-form1a.pdf" target="_blank"><img src="Images/form.gif" alt="rentalform"></a></p>
  <p style="float:right;"><a href="#top"> -TOP- </a></p>
</div>


</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>