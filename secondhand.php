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
<?php include("include/nav.inc");?>

</head>
<body>

<div class="header">
    <img src="LOGO for team 2.png" alt="logo">
    <h1 style="font-size:250%">Rental House</h1>
</div>

    <h2 style="font-size: 190%">Welcome to <strong>Second Hand Requirement</strong>.</h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li><a href="apartment.html">• Go to Rent</a></li>
    <li><a href="Homestay.html">• Homestay</a></li>
    <li><a href="CommunicationBar.html">• Communication Bar</a></li>
    <li>• Support</li>
        <ul>
            <li><a href="notice.php" style="padding-left:7%">Notice for Rental</a></li>
            <li><a href="legalagent.php" style="padding-left:7%">Legal Agent Support</a></li>
            <li><a href="agreement.php" style="padding-left:7%">Agreement Form Models</a></li>
            <li><a href="secondhand.php" style="padding-left:7%">Second Hand Requirements</li>
        </ul>
    <li><a href="AboutUs.html">• About Us</a></li>
  </ul>
</div>

<div class="col-6">
  <h1>Second Hand Requirements</h1>
  <p>~~~</p>
  <p style="float:right;"><a href="#top"> -TOP- </a></p>
</div>

</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>