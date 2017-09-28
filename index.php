<?php
session_start();
include_once('include/config.php');
?>

<!DOCTYPE html>
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rental House</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link href="css/nav.css" rel="stylesheet" type="text/css">
<link href="css/rental.css" rel="stylesheet" type="text/css">
<link href="imageresize.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/img2.css" type="text/css">
<link href="text.css" rel="stylesheet" type="text/css">
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

<h2 style="font-size: 190%">Welcome to <strong>Rental House</strong>!</h2>

<div class="row">

<div class="col-3 col-s-3 menu">
  <ul>
    <li><a href="#rent">Go get Rent</a></li>
    <li><a href="#homestay">Homestay</a></li>
    <li><a href="#bar">Communication Bar</a></li>
    <li><a href="#support">Support</a></li>
    <li><a href="#aboutus">About Us</a></li>
  </ul>
</div>

<div class="col-6 col-s-9">
  <h1 class="smalltitle" id="rent">Rent</h1>
  <p>
     <a href="apartment.php" target="_self">
        <img class="smallpic" src="Information about properties/apartment&unit/1/1.jpg" alt="Hannaby Street-1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties/apartment&unit/1/1.jpg" alt="Hannaby Street-1" style=" clear:both;">
     </a>
     <a href="house.php" target="_self">
        <img class="smallpic" src="Information about properties\house\1\1.jpg" alt="KerryAvenue" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\1\1.jpg" alt="KerryAvenue" style=" clear:both;">
     </a>
     <a href="townhouse.php" target="_self">
         <img class="smallpic" src="Information about properties\townhouse\1\1.jpg" alt="Grand Boulevard Townhouse" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\1\1.jpg" alt="Grand Boulevard Townhouse" style=" clear:both;">			
     </a>
     <a href="villa.php" target="_self">
       <img class="smallpic" src="Information about properties\villa\1\1.jpg" alt="Phillip drive villa1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\1\1.jpg" alt="Phillip drive villa1" style=" clear:both;">
     </a>
    <br><h3><a href="apartment.php" style="float:right;">More detials</a></h3>
  </p>
  
  <h1 class="smalltitle" id="homestay">Homestay</h1>
  <p><b>Homestay</b> is a popular form of hospitality and lodging whereby visitors stay in a house or apartment of a local of the city to which they are traveling. <br>
  <br>The length of stay can vary from one night to even a year and can be free, in exchange for monetary compensation, in exchange for a stay at the guest's property either simultaneously or at another time (home exchange), or in exchange for help on the host's property. 
  <br>Longer term homestays are popular with students that are participating in study abroad programs. 
  <br>Homestays are examples of collaborative consumption and sharing. 
  <br><h3><a href="Homestay.php" style="float:right; size:90%;">More detials</a></h3>
  	<br>More Information please check our support website: <a href="https://www.booking.com/homestay/index.en.html?aid=309654;label=homestays-english-en-row-GM6EAHCIBSTmBbjm8BkvawS166197671979:pl:ta:p1:p21,093,000:ac:ap1t2:neg:fi:tikwd-70705021:lp9069129:li:dec:dm;ws=&gclid=EAIaIQobChMIgvai-avd1QIVjQYqCh1Lgw4JEAAYAiAAEgKiKfD_BwE">&nbsp;Booking.com</a>
  </p>
  
  <h1 class="smalltitle" id="bar">Communication Bar</h1>
  <p>Do you confuse about rentals? There is a <a href="CommunicationBar.php">forum </a>for you.</p>
  <p>There is some questions about rental which popular in forum, we list out for you to check them quick. please see in <a href="question.php">Our Q and A page</a>.</p>
  
  <h1 class="smalltitle" id="support">Support</h1>
  <p>There are some notices for your consideration.
  <br>Examples include letting out real estate (real property) for the purpose of housing tenure (where the tenant rents a residence to live in), parking space for a vehicle(s), storage space, whole or portions of properties for business, agricultural, institutional, or government use, or other reasons.
  <br style="float:right; size:90%;">There are some <a href="notice.php">more notices</a> for check.
  <br>There is typically an implied, explicit, or written rental agreement or contract involved to specify the terms of the rental, which are regulated and managed under contract law.
  <br style="float:right; size:90%;">There are some <a href="legalagent.php">Legal agent</a> for support.
  <br> While you're on a fixed-term tenancy agreement (provided it's less than two years), your rent generally can't be increased unless it's been written into your tenancy agreement.
  <br style="float:right; size:90%;">There are some simple <a href="agreement.php">Rental Agreement Forms</a> for consideration.
  <br><a href="notice.html" style="float:right; size:90%;">Details</a>
  
  </p>
  <h1 class="smalltitle" id="secondhand">Funiture Shoping</h1>
  <p>
  <a href="secondhand.php">
    <img class="pic2" src="Images/sofa.jpg" alt="HannabyStreet" style=" float:left;">
    <img class="picbig2" src="Images/sofa.jpg" alt="HannabyStreet" style=" float:left;">
    <img class="pic2" src="Images/chair.jpg" alt="HannabyStreet" style=" float:left;">
    <img class="picbig2" src="Images/chairview.jpg" alt="HannabyStreet" style="float:left;">
    <img class="pic2" src="Images/bed.jpg" alt="HannabyStreet" style="float:left;">
    <img class="picbig2" src="Images/bedview.jpg" alt="HannabyStreet" style="float:left;">
  </a>
  </p>
  
    <p style="float:right;"><a href="#top"> -TOP- </a></p>
</div>

<div class="col-3 col-s-12">
  <div class="aside" id="aboutus">
    <h2>About Us</h2>
    <p>Our location
    <br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.086094403293!2d153.02718551557473!3d-27.46657892314723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a1d064dcb2f%3A0x7f3aed61f0bfd9e3!2sJames+Cook+University%2C+Brisbane+Campus!5e0!3m2!1sen!2sau!4v1501473138677" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </p>
  </div>
</div>

</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>