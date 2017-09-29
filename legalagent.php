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
<link href="text.css" rel="stylesheet" type="text/css">
<script src="js/nav.js"></script>
<script src="js/display.js"></script>
<link rel="stylesheet" href="css/nav_responsive.css" type="text/css">


</head>
<body>

<div class="header">
    <img src="Images/LOGO for team 2.png" alt="logo">
    <p>
  <h1 style="font-size:250%" id="top">Rental House</h1>
	<?php include("include/nav.inc")?></p>
</div>

    <h2 style="font-size: 190%">Welcome to <strong>Legal Agent</strong>.</h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li><a href="apartment.php">• Go to Rent</a></li>
    <li><a href="Homestay.php">• Homestay</a></li>
    <li><a href="CommunicationBar.php">• Communication Bar</a></li>
    <li>• Support</li>
        <ul>
            <li><a href="notice.php" style="padding-left:7%">Notice for Rental</a></li>
            <li style="padding-left:7%">Legal Agent Support</a></li>
            <li><a href="agreement.php" style="padding-left:7%">Agreement Form Models</a></li>
            <li><a href="secondhand.php" style="padding-left:7%">Second Hand Requirements</a></li>
        </ul>
    <li><a href="AboutUs.php">• About Us</a></li>
  </ul>
</div>

<div class="col-9">
  <h1>Legal Support</h1>
  <p><b class="smalltitle" id="increase">The Government support</b>
  <br><br>The Government always has a real support for rentaler to complain about maters.
  <br>
  <br>If you are renting a home (as a tenant), or renting out an investment property (as a lessor/landlord), you have a variety of rules, rights and responsibilities.
<br>
<br>The following links will give you the information to help you understand renting laws and avoid common renting pitfalls.
<ul>
<li>make sure you are prepared </li>
<li>payment of rent and rent increases;</li>
<li>security bonds;</li>
<li>repairs;</li>
<li>entry rights of the lessor/property manager;</li>
<li>who pays utilities, rates and taxes;</li>
<li>using notices and forms;</li>
<li>Property condition reports;</li>
<li>ending a tenancy; and</li>
<li>managing issues.</ul>
<br>Renting a home/unit in Western Australia is governed by a set of laws called the Residential Tenancies Act 1987 and the Residential Tenancies Regulations 1989.
  <br style="float:right; size:90%;">Government Support website<a href="http://www.commerce.wa.gov.au/consumer-protection" target="_blank"> Consumer Protection</a>.
  <p><b class="smalltitle" id="increase">Free Residential Tenancy Agreement - Australia</b>
<br><br>LawDepot lets you easily customise legal documents.
<br><a href="https://www.lawdepot.com/contracts/residential-tenancy-agreement/?code=RESLSE&loc=AU&pid=googleppc-reslse_au-RentalT2_e1-ggkey_%2Brental%20%2Bagreement&gclid=EAIaIQobChMItMjb2Znb1QIV1goqCh0TlAOBEAAYASAAEgK18fD_BwE" style="margin-left:50px; size:90%;" target="_blank"><b>www.lawdepot.com</b></a>
<br>More than 2 million people have used LawDepot to create over 4 million legal documents and save over a billion dollars in legal fees. Whether you are interested in protecting your estate, managing a rental property, setting up a business, or any other situation requiring legal forms, LawDepot's extensive library of documents and legal resources are able to assist you with your legal needs.
<br><br>"Customised legal documents at a fraction of the price it would cost through a traditional lawyer"
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Christopher Dimakos, Lawyer
<br>
</p>
    <p style="float:right;"><a href="#top"> -TOP- </a></p>
</div>

</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>