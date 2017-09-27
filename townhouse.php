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
<link href="rental.css" rel="stylesheet" type="text/css">
<link href="text.css" rel="stylesheet" type="text/css">
<link href="imageresize.css" rel="stylesheet" type="text/css">
<script src="js/nav.js"></script>
<link rel="stylesheet" href="css/nav_responsive.css" type="text/css">
<script src="js/show_text.js"></script>
<?php include("include/nav.inc")?>
</head>
<body>

<div class="header">
<img src="Images/LOGO for team 2.png" alt="logo">
  <h1 style="font-size:250%" id="top">Rental House</h1>
</div>

    <h2 style="font-size: 190%"><b>Welcome to Notice Page!</b></h2>

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
       
       <p style="float:left;"><a href="#2bedroom"> -2 BEDROOM- </a></p>
         &nbsp;  &nbsp;
          <p style="float:left;"><a href="#3bedroom"> -3 BEDROOM- </a></p>  
          <br>
          <br>
<p><h1><u>4/354 Grand Boulevard</u></h1>
       <ul>
       	<br><li><strong>$350 PER WEEK</strong></li>
		<br><li>Date Available: Now</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text">
        <br>Situated in a fantastic location just down the road from highlands hote
        <br>
		<br>Large rear entertaining balcony & front balcony
        
        </span>
                      
        <a id="expand-click" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click','expand-text','inline')"> Read more</a>
        <br>
    	<br><strong>Book a viewing today. </strong>
      	<span style="display:none;" id="expand-text-agent1">
        <ul>
        <li>AGENT NAME : JULIA MORMONT</li>
        <li>AGENT CONTACT NUMBER: 0412458965</li>
        </ul>
        </span>            
        <a id="expand-click-1" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-1','expand-text-agent1','inline')">Click for agent details </a>
        
</p>
</div>
 
</div>
  

<p><img class="pic" src="Information about properties\townhouse\1\1.jpg" alt="Grand Boulevard Townhouse" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\townhouse\1\1.jpg" alt="Grand Boulevard Townhouse" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:Townhouse</li>
            <br><li id="3bedroom">Bedrooms:3</li> 
            <br><li>Bathrooms:2</li>
            <br><li>Bond:$1,521</li>
            <br><li>Secure Garage Spaces:1</li>
        </ul>
        </p>
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
         <img class="smallpic" src="Information about properties\townhouse\1\2.jpg" alt="Grand Boulevard Townhouse" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\1\2.jpg" alt="Grand Boulevard Townhouse" style=" clear:both;">
        <img class="smallpic" src="Information about properties\townhouse\1\3.jpg" alt="Grand Boulevard Townhouse" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\1\3.jpg" alt="Grand Boulevard Townhouse" style=" clear:both;">
        <img class="smallpic" src="Information about properties\townhouse\1\4.jpg" alt="Grand Boulevard Townhouse" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\1\4.jpg" alt="Grand Boulevard Townhouse" style=" clear:both;">
        <img class="smallpic" src="Information about properties\townhouse\1\5.jpg" alt="Grand Boulevard Townhouse" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\1\5.jpg" alt="Grand Boulevard Townhouse" style=" clear:both;">
        </p>
        
                 </div>
        
        </div>
        
        
        
 <div class="row">
<div class="col-3 col-s-12 menu">
  </div>

<div class="col-9">
<div class="row" id="apartments1">
       <div class="col-s-12 col-12" id="apartment2">
<p><h1><u>2/16 Mulgrave Street</u></h1>
       <ul>
       	<br><li><strong>$750 PER WEEK</strong></li>
		
		<br><li>Date Available: Thu 07-	Oct-17</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text2">
        <br>A Brand New, Smart, Spacious 252 sq ft 3 Bed 3 Bath home located within close proximity to Holmesglen and Jordanville stations,
        <br>
		<br>Parkhill Primary School, Chadstone Shopping Centre and the M1 Freeway. 
               
        </span>
                      
        <a id="expand-click2" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click2','expand-text2','inline')"> Read more</a>
        <br>
    	<br><strong>Book a viewing today. </strong>
      	<span style="display:none;" id="expand-text-agent3">
        <ul>
        <li>AGENT NAME : BIANCA GIORLA</li>
        <li>AGENT CONTACT NUMBER: 03 9915 7888</li>
        </ul>
        </span>            
        <a id="expand-click-3" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-3','expand-text-agent3','inline')">Click for agent details </a>
        
</p>
</div>
 
</div>
  

<img class="pic" src="Information about properties\townhouse\2\1.jpg" alt="Mulgrave Street" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\townhouse\2\1.jpg" alt="Mulgrave Street" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:Unit</li>
            <br><li id="2bedroom">Bedrooms:2</li> 
            <br><li>Bathrooms:1</li>
            <br><li>Bond:$2,824</li>
            <br><li>Outdoor Features</li>
            <br><li>Garage Spaces:1</li>
        </ul>
      
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
                   
         <img class="smallpic" src="Information about properties\townhouse\2\2.jpg" alt="Mulgrave Street" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\2\2.jpg" alt="Mulgrave Street" style=" clear:both;">
        <img class="smallpic" src="Information about properties\townhouse\2\3.jpg" alt="Mulgrave Street" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\2\3.jpg" alt="Mulgrave Street" style=" clear:both;">
        <img class="smallpic" src="Information about properties\townhouse\2\4.jpg" alt="Mulgrave Street" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\2\4.jpg" alt="Mulgrave Street" style=" clear:both;">
        <img class="smallpic" src="Information about properties\townhouse\2\5.jpg" alt="Mulgrave Street" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\2\5.jpg" alt="Mulgrave Street" style=" clear:both;">
        </p>
        
         
       </div>
        
        </div>

        
 <div class="row">
<div class="col-3 col-s-12 menu">
  </div>

<div class="col-9">
<div class="row" id="apartments3">
       <div class="col-s-12 col-12" id="apartment4">
<p><h1><u>3/38 Waterworks Road</u></h1>
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
        <li>AGENT NAME : MATHEW KEATON</li>
        <li>AGENT CONTACT NUMBER: 045875462</li>
        </ul>
        </span>            
        <a id="expand-click-4" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-4','expand-text-agent4','inline')">Click for agent details </a>
        
</p>
</div>
 
</div>
  

<p><img class="pic" src="Information about properties\townhouse\3\1.jpg" alt="Waterworks" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\townhouse\3\1.jpg" alt="Waterworks" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:Apartment</li>
            <br><li>Bedrooms:5</li> 
            <br><li>Bathrooms:2</li>
            <br><li>Bond:$2,230</li>
            <br><li>Outdoor Features</li>
            <br><li>Garage Spaces:1</li>
             <br><li>Deck</li>
            <br><li>Entertaining Area</li>
        </ul>
        </p>
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
        <img class="smallpic" src="Information about properties\townhouse\3\2.jpg" alt="Waterworks" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\3\2.jpg" alt="Waterworks" style=" clear:both;">
        <img class="smallpic" src="Information about properties\townhouse\3\3.jpg" alt="Waterworks" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\3\3.jpg" alt="Waterworks" style=" clear:both;">
        <img class="smallpic" src="Information about properties\townhouse\3\4.jpg" alt="Waterworks" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\3\4.jpg" alt="Waterworks" style=" clear:both;">
        <img class="smallpic" src="Information about properties\townhouse\3\5.jpg" alt="Waterworks" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\townhouse\3\5.jpg" alt="Waterworks" style=" clear:both;">
        </p>
         <p style="float:right;"><a href="#top"> -TOP- </a></p>
       </div>

        
        </div>
<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>