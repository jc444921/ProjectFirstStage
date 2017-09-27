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
    <img src="Images/LOGO for team 2.png" alt="logo">
  <h1 style="font-size:250%" id="top">Rental House</h1>
</div>

    <h2 style="font-size: 190%">Welcome to <strong>Legal Agent</strong>.</h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li><a href="#">• Go to Rent</a></li>
    <li><a href="#">• Homestay</a></li>
    <li><a href="#">• Communication Bar</a></li>
    <li>• Support</li>
    <ul>
    <li><a href="notice.php" style="padding-left:7%">Notice for Rental</a></li>
    <li style="padding-left:7%">Legal Agent Support</li>
        <ul>
            <li><a href="#" style="padding-left:15%">Rules</a></li>
            <li><a href="#" style="padding-left:15%">Legals</a></li>
            <li style="padding-left:15%">More info please check <a href="https://www.lawdepot.com/contracts/residential-tenancy-agreement/?code=RESLSE&loc=AU&pid=googleppc-reslse_au-RentalT2_e1-ggkey_%2Brental%20%2Bagreement&gclid=EAIaIQobChMItMjb2Znb1QIV1goqCh0TlAOBEAAYASAAEgK18fD_BwE">www.lawdepot.com</a></li>
        </ul>
    <li><a href="agreement.php" style="padding-left:7%">Agreement Form Models</a></li>
    <li><a href="secondhand.php" style="padding-left:7%">Second Hand Requirements</a></li>
    </ul>
    <li><a href="#">• About Us</a></li>
  </ul>
</div>

<div class="col-6">
  <h1>Legal Agent Support</h1>
  <p>~~~</p>
  <p style="float:right;"><a href="#top"> -TOP- </a></p>
</div>

</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>