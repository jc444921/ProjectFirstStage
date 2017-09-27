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
  <?php include("include/nav.inc")?>
<img src="LOGO for team 2.png" alt="logo" style="width:300px; height:200px;">

  <h1 style="font-size:250%">Rental House</h1>

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
  	<img src="Information about properties/apartment&unit/3/image7.jpg" alt="apartment1" style="float:left; width:33%; height:20%"> 
  	<img src="Information about properties/apartment&unit/2/1.jpg" alt="apartment2" style="float:left; width:33%; height:20%">
    <img src="Information about properties/house/1/main.jpg" alt="house1" style="float:left; width:33%; height:20%">
    <h2><a href="apartment.html">More detials</a></h2>
  </p>
  
  <h1 class="smalltitle" id="homestay">Homestay</h1>
  <p><b>Homestay</b> is a popular form of hospitality and lodging whereby visitors stay in a house or apartment of a local of the city to which they are traveling. <br>
  <br>The length of stay can vary from one night to even a year and can be free, in exchange for monetary compensation, in exchange for a stay at the guest's property either simultaneously or at another time (home exchange), or in exchange for help on the host's property. 
  <br>Longer term homestays are popular with students that are participating in study abroad programs. 
  <br>Homestays are examples of collaborative consumption and sharing. 
  <br><a href="#" style="float:right; size:90%;">More information</a>
  	<br>**<a href="https://www.booking.com/homestay/index.en.html?aid=309654;label=homestays-english-en-row-GM6EAHCIBSTmBbjm8BkvawS166197671979:pl:ta:p1:p21,093,000:ac:ap1t2:neg:fi:tikwd-70705021:lp9069129:li:dec:dm;ws=&gclid=EAIaIQobChMIgvai-avd1QIVjQYqCh1Lgw4JEAAYAiAAEgKiKfD_BwE">there is a useful website</a>
  </p>
  
  <h1 class="smalltitle" id="bar">Communication Bar</h1>
  <p></p>
  
  <h1 class="smalltitle" id="support">Support</h1>
  <p>
  <br> 
  <br><a href="notice.html" style="float:right; size:90%;">Details</a>
  	<h2 style="padding-left:5%; size:110%;">Rental Agreement</h2>
  <br>There is typically an implied, explicit, or written rental agreement or contract involved to specify the terms of the rental, which are regulated and managed under contract law.
  <br>
  <br>Examples include letting out real estate (real property) for the purpose of housing tenure (where the tenant rents a residence to live in), parking space for a vehicle(s), storage space, whole or portions of properties for business, agricultural, institutional, or government use, or other reasons.
  <br>
  <br>When renting real estate, the person(s) or party who lives in or occupies the real estate is often called a tenant, paying rent to the owner of the property, often called a landlord (or landlady). The real estate rented may be all or part of almost any real estate, such as an apartment, house, building, business office(s) or suite, land, farm, or merely an inside or outside space to park a vehicle, or store things all under Real estate law.
  <br>
  <br>The tenancy agreement for real estate is often called a lease, and usually involves specific property rights in real property, as opposed to chattels.
  <br>
  <br style="float:right; size:90%;">There are some simple <a href="agreement.html">Rental Agreement Forms</a> for consideration.
  </p>
  
  <h1 class="smalltitle" id="aboutus">About Us</h1>
  
    <p style="float:right;"><a href="#top"> -TOP- </a></p>
</div>

<div class="col-3 col-s-12">
  <div class="aside">
    <h2>Searching</h2>
    <p></p>
    <h2>Where is convenient for live?</h2>
    <p>Crete is a Greek island in the Mediterranean Sea.</p>
    <h2>How to make decisions?</h2>
    <p>You can reach Chania airport from all over Europe.</p>
  </div>
</div>

</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>