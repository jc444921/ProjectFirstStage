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
<link href="css/nav.css" rel="stylesheet" type="text/css">
<link href="css/rental.css" rel="stylesheet" type="text/css">
<link href="imageresize.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/img2.css" type="text/css">
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

    <h2 style="font-size: 190%"><b>Welcome to Villa Page!</b></h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li style="padding-left:7%">• Go to Rent</li>
    	<ul>
        	<li><a href="apartment.php" style="padding-left:15%">Apartment and Unit</a></li>
            <li><a href="house.php" style="padding-left:15%">House</a></li>
            <li><a href="townhouse.php" style="padding-left:15%">Townhouse</a></li>
            <li><a href="villa.php" style="padding-left:15%">Villa</a></li>
        </ul>
    <li><a href="Homestay.php">• Homestay</a></li>
    <li><a href="CommunicationBar.php">• Communication Bar</a></li>
    <li><a href="notice.php">• Support</a></li>
    <li><a href="AboutUs.php">• About Us</a></li>
  </ul>
</div>

<div class="col-9">
<div class="row" id="apartments">
       <div class="col-s-12 col-12" id="about-content">
       
       <p style="float:left;"><a href="#1bedroom"> -1 BEDROOM- </a></p>
         &nbsp;  &nbsp;
          <p style="float:left;"><a href="#2bedroom"> -2 BEDROOM- </a></p>  
          <br>
          <br>
<p><h1><u>48 Arthur Phillip Drive</u></h1>
       <ul>
       	<br><li><strong>$410 PER WEEK</strong></li>
		<br><li>Date Available: Thu 28-Sep-17</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text">
        <br>Lovely full brick villa set in a good street, 2 bedrooms with built in robes, air conditioning, open plan lounge/kitchen/dining, timber kitchen with granite look benchtop
        <br>
		<br>Large double garage with extra space for storage and carport. Close to amenities.
        
        </span>
                      
        <a id="expand-click" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click','expand-text','inline')"> Read more</a>
        <br>
    	<br><strong>Book a viewing today. </strong>
      	<span style="display:none;" id="expand-text-agent1">
        <ul>
        <li>AGENT NAME : RACHAEL GULLOW</li>
        <li>AGENT CONTACT NUMBER: 0426540607</li>
        </ul>
        </span>            
        <a id="expand-click-1" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-1','expand-text-agent1','inline')">Click for agent details </a>
        
</p>
</div>
 
</div>
  

<p><img class="pic" src="Information about properties\villa\1\1.jpg" alt="villa-main" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\villa\1\1.jpg" alt="villa-main" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:Villa</li>
            <br><li id="2bedroom">Bedrooms:2</li> 
            <br><li>Bathrooms:1</li>
            <br><li>Bond:$1,640</li>
            <br><li>Indoor Features</li>
            <br><li>Air Conditioning</li>
            <br><li>Secure Garage Spaces:1</li>
        </ul>
        </p>
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
       <img class="smallpic" src="Information about properties\villa\1\2.jpg" alt="Phillip drive villa1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\1\2.jpg" alt="Phillip drive villa1" style=" clear:both;">
        <img class="smallpic" src="Information about properties\villa\1\3.jpg" alt="Phillip drive villa1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\1\3.jpg" alt="Phillip drive villa1" style=" clear:both;">
        <img class="smallpic" src="Information about properties\villa\1\4.jpg" alt="Phillip drive villa1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\1\4.jpg" alt="Phillip drive villa1" style=" clear:both;">
        <img class="smallpic" src="Information about properties\villa\1\5.jpg" alt="Phillip drive villa1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\1\5.jpg" alt="Phillip drive villa1" style=" clear:both;">
        </p>
        
                 </div>
        
        </div>
        
        
        
 <div class="row">
<div class="col-3 col-s-12 menu">
  </div>

<div class="col-9">
<div class="row" id="apartments1">
       <div class="col-s-12 col-12" id="apartment2">
<p><h1><u>2/138 Mitford Street</u></h1>
       <ul>
       	<br><li><strong>$650 PER WEEK</strong></li>
		
		<br><li>Date Available: Thu 20-Oct-17</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text2">
        <br>This low maintenance two bedroom villa is one of only four and positioned for superior bayside living	
        <br>
		<br>Large living and dining room with abundance of light
               
        </span>
                      
        <a id="expand-click2" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click2','expand-text2','inline')"> Read more</a>
        <br>
    	<br><strong>Book a viewing today. </strong>
      	<span style="display:none;" id="expand-text-agent3">
        <ul>
        <li>AGENT NAME : TEDDY CRUZE</li>
        <li>AGENT CONTACT NUMBER: 0426542357</li>
        </ul>
        </span>            
        <a id="expand-click-3" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-3','expand-text-agent3','inline')">Click for agent details </a>
        
</p>
</div>
 
</div>
  

<img class="pic" src="Information about properties\villa\2\1.jpg" alt="villa-main" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\apartment&amp;unit\2\1.jpg" alt="villa-main" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:Unit</li>
            <br><li>Bedrooms:2</li> 
            <br><li>Bathrooms:1</li>
            <br><li>Bond:$2,824</li>
            <br><li>Outdoor Features</li>
            <br><li>Garage Spaces:1</li>
        </ul>
      
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
                   
         <img class="smallpic" src="Information about properties\villa\2\2.jpg" alt="Mitford villa1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\2\2.jpg" alt="Mitford  drive villa1" style=" clear:both;">
        <img class="smallpic" src="Information about properties\villa\2\3.jpg" alt="Mitford  drive villa1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\2\3.jpg" alt="Mitford  drive villa1" style=" clear:both;">
        <img class="smallpic" src="Information about properties\villa\2\4.jpg" alt="Mitford villa1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\2\4.jpg" alt="Mitford  villa1" style=" clear:both;">
        <img class="smallpic" src="Information about properties\villa\2\5.jpg" alt="Mitford  villa1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\2\5.jpg" alt="Mitford villa1" style=" clear:both;">
        </p>
        
         
       </div>
        
        </div>

        
 <div class="row">
<div class="col-3 col-s-12 menu">
  </div>

<div class="col-9">
<div class="row" id="apartments3">
       <div class="col-s-12 col-12" id="apartment4">
<p><h1><u>3/38 Nankeen Avenue</u></h1>
       <ul>
       	<br><li><strong>$620 PER WEEK</strong></li>
		
		<br><li>Date Available: Now</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text4">
        <br>Have you been looking for that property with the X-FACTOR? Looking for location, nice views and easy living?
        <br>
		<br>Look no further and do not miss your opportunity to secure one of these fantastic high end, brand new villas located in a prime Paradise Point location.

       
        </span>
                      
        <a id="expand-click4" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-4','expand-text4','inline')"> Read more</a>
        <br>
    	<br><strong>Book a viewing today. </strong>
      	<span style="display:none;" id="expand-text-agent4">
        <ul>
        <li>AGENT NAME : MATHEW WALLACE</li>
        <li>AGENT CONTACT NUMBER: 0452375183</li>
        </ul>
        </span>            
        <a id="expand-click-4" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-4','expand-text-agent4','inline')">Click for agent details </a>
        
</p>
</div>
 
</div>
  

<p><img class="pic" src="Information about properties\villa\3\1.jpg" alt="villa-livingarea" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\villa\3\1.jpg" alt="villa-livingarea" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:Apartment</li>
            <br><li id="1bedroom">Bedrooms:1</li> 
            <br><li>Bathrooms:2</li>
            <br><li>Bond:$2,480</li>
            <br><li>Outdoor Features</li>
            <br><li>Garage Spaces:1</li>
             <br><li>Deck</li>
            <br><li>Entertaining Area</li>
        </ul>
        </p>
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
        <img class="smallpic" src="Information about properties\villa\3\2.jpg" alt="Nankeen" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\3\2.jpg" alt="Nankeen" style=" clear:both;">
        <img class="smallpic" src="Information about properties\villa\3\3.jpg" alt="Nankeen" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\3\3.jpg" alt="Nankeen" style=" clear:both;">
        <img class="smallpic" src="Information about properties\villa\3\4.jpg" alt="Nankeen" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\3\4.jpg" alt="Nankeen" style=" clear:both;">
        <img class="smallpic" src="Information about properties\villa\3\5.jpg" alt="Nankeenvilla1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\villa\3\5.jpg" alt="Nankeen villa1" style=" clear:both;">
        </p>
         <p style="float:right;"><a href="#top"> -TOP- </a></p>
       </div>
        
        </div>
<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>