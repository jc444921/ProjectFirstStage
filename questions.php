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

    <h2 style="font-size: 190%"><b>Welcome to Q and A!</b></h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li><a href="apartment.php">• Go to Rent</a></li>
    <li><a href="Homestay.php">• Homestay</a></li>
    <li><a href="CommunicationBar.php">• Communication Bar</a></li>
    	<ul>
        	<li><a href="#qs" style="padding-left:15%">General Questions</a></li>
            <li><a href="#comment" style="padding-left:15%">Wanna leave a comment?</a></li>
        </ul>
    <li><a href="notice.php">• Support</a></li>
    <li><a href="AboutUs.php">• About Us</a></li>
  </ul>
</div>

<div class="col-9">

  <p><h2 class="smalltitle" id="qs">General Questions</h2></p>
<div class="col-s-12 col-12" id="homestay-content">
<p><strong>Who sets the homestay host fees?:</strong> 
</p>
<ul>
  <li>These are set by each homestay host themselves. </li>
</ul>
<p><strong>Does this website take any commission from the payment?:</strong> 
</p>
<ul>
  <li>No. Any arrangement is purely between homestay provider and the student.

We feel it is better to have fewer people in the chain wanting a slice of the money for adding little value.  </li>
</ul>

<p><strong>What are the differences between a paid featured listing and a free listing?:</strong> 
</p>
<ul>
  <li>For a monthly fee of $19.00 a featured listing provides many benefits to increase your likelihood of finding guests in a shorter timeframe.
It is possible to switch between the two types of listing at anytime. A free listing can be upgraded simply by clicking the 'Upgrade' link above.
 </li>
</ul>
<p><strong>How do I change to a Featured Listing?:</strong> 
</p>
<ul>
  <li>Login to the site.
Click the Upgrade button in the banner.
Follow the steps to upgrade.  </li>
</ul>
<p><strong>I upgraded to a Featured Listing but don't seem to have any of the features:</strong> 
</p>
<ul>
  <li>PayPal takes time to process an eCheque before they send us payment, they will always give you an estimated date in their payment notification emails.  </li>
</ul>
<p><strong>How do I contact a homestay host?:</strong> 
</p>
<ul>
  <li>Login to the site.
Locate the host you are interested in. There will be a contact form in the page.  </li>
</ul>
 <form action="" method="post" class="STYLE-NAME">
<h1 id="comment">Wanna leave a comment?</h1></tr>
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
<br>
<br>
<br>
<br>



<p><a href="https://www.brisbanehomestay.org/help">More info please check this website <b>www.questions.com</b></a></p>
    <p style="float:right;"><a href="#top"> -TOP- </a></p>
</div>

</div>
</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>