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
<script src="js/display.js"></script>
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

 <h2 style="font-size: 190%"><b>Welcome to our apartment search!</b></h2>
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
<p><h1> <u>15A Hannaby Street</u></h1> 
       <ul>
       	<br><li><strong>$280 PER WEEK</strong></li>
		
		<br><li>Date Available: Thu 28-Sep-17</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text">
        <br>This 2 bedroom Duplex is opposite a lovely park in culdesac location. Recently painted and with new carpet this property is ready to move into.
        <br>
		<br>Featuring a good size front yard, rear yard with patio, air-cond to the lounge room and kitchen overlooking the park this may be the right property for you.
        <br>
		<br>Security door to front and rear. Walk to transport and close to Amenities.
        
        </span>
                      
        <a id="expand-click" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click','expand-text','inline')"> Read more</a>
        <br>
    	<br><strong>Book a viewing today. </strong>
      	<span style="display:none;" id="expand-text-agent1">
        <ul>
        <li>AGENT NAME : WILL GRACE</li>
        <li>AGENT CONTACT NUMBER: 0426540607</li>
        </ul>
        </span>            
        <a id="expand-click-1" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-1','expand-text-agent1','inline')">Click for agent details </a>
        
</p>
</div>
 
</div>
  

<p><img class="pic" src="Information about properties/apartment&unit/1/1.jpg" alt="HannabyStreet" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties/apartment&unit/1/1.jpg" alt="HannabyStreet" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:Unit</li>
            <br><li id="2bedroom">Bedrooms:2</li> 
            <br><li>Bathrooms:1</li>
            <br><li>Bond:$1,120</li>
            <br><li>Indoor Features</li>
            <br><li>Air Conditioning</li>
            <br><li>Garage Spaces:1</li>
        </ul>
        </p>
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
        <img class="smallpic" src="Information about properties\apartment&unit\1\2.jpg" alt="Hannaby Street-1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\1\2.jpg" alt="Hannaby Street-1" style=" clear:both;">
        <img class="smallpic" src="Information about properties\apartment&unit\1\3.jpg" alt="Hannaby Street-1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\1\3.jpg" alt="Hannaby Street-1" style=" clear:both;">
        <img class="smallpic" src="Information about properties\apartment&unit\1\4.jpg" alt="Hannaby Street-1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\1\4.jpg" alt="Hannaby Street-1" style=" clear:both;">
        <img class="smallpic" src="Information about properties\apartment&unit\1\5.jpg" alt="Hannaby Street-1" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\1\5.jpg" alt="Hannaby Street-1" style=" clear:both;">
        
        
        </p>
        
                 </div>
        
        </div>
        
        
        
 <div class="row">
<div class="col-3 col-s-12 menu">
  </div>

<div class="col-9">
<div class="row" id="apartments1">
       <div class="col-s-12 col-12" id="apartment2">
<p><h1><u>7 Leven Street, Coopers Plains</u></h1>
       <ul>
       	<br><li><strong>$670 PER WEEK</strong></li>
		
		<br><li>Date Available: Thu 29-Sep-17</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text2">
        <br>Great Unit Close Top Everything!
        <br>
		<br>This tidy 2 bedroom, lowset brick unit is located in a quite complex of 3 in Harristown which is ideally situated within minutes to the city centre, schools and the University of	 Southern Queensland with the added bonus of fantastic parks nearby.

        <br>
		<br>Open plan living, dining and kitchen
        
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
  

<img class="pic" src="Information about properties\apartment&unit\2\1.jpg" alt="Coopers Plains" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\apartment&unit\2\1.jpg" alt="Coopers Plains" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:Unit</li>
            <br><li>Bedrooms:2</li> 
            <br><li>Bathrooms:1</li>
            <br><li>Bond:$1,020</li>
            <br><li>Outdoor Features</li>
            <br><li>Garage Spaces:1</li>
        </ul>
      
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
                   
        <img class="smallpic" src="Information about properties\apartment&unit\2\2.jpg" alt="Leven Street-2" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\2\2.jpg" alt="Hannaby Street-2" style=" clear:both;">
        <img class="smallpic" src="Information about properties\apartment&unit\2\3.jpg" alt="Leven Street-3" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\2\3.jpg" alt="Leven Street-3" style=" clear:both;">
        <img class="smallpic" src="Information about properties\apartment&unit\2\4.jpg" alt="Leven Street-4" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\2\4.jpg" alt="Leven Street-4" style=" clear:both;">
        <img class="smallpic" src="Information about properties\apartment&unit\2\5.jpg" alt="Leven Street-5" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\2\5.jpg" alt="Leven Street-5" style=" clear:both;">
        
        

        </p>
        
         
       </div>
        
        </div>

        
 <div class="row">
<div class="col-3 col-s-12 menu">
  </div>

<div class="col-9">
<div class="row" id="apartments3">
       <div class="col-s-12 col-12" id="apartment4">
<p><h1><u>104/27 Victoria Street Footscray</u></h1>
       <ul>
       	<br><li><strong>$375 PER WEEK</strong></li>
		
		<br><li>Date Available: Thu 29-Sep-17</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text4">
        <br>Located in a quiet residential area of footscray, but close to all amenities and transport
        <br>
		<br>CBD is less than 10 minutes away by car, or if you prefer Middle Footscray is literally opposite the apartment complex 	

       
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
  

<p><img class="pic" src="Information about properties\apartment&unit\3\1.jpg" alt="VictoriaStreet" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\apartment&unit\3\1.jpg" alt="VictoriaStreet" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:Apartment</li>
            <br><li id="1bedroom">Bedrooms:1</li> 
            <br><li>Bathrooms:1</li>
            <br><li>Bond:$1,625</li>
            <br><li>Outdoor Features</li>
            <br><li>Garage Spaces:1</li>
             <br><li>Other Features</li>
            <br><li>Close to shops, Close to transport</li>
        </ul>
        </p>
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
       <img class="smallpic" src="Information about properties\apartment&unit\3\2.jpg" alt="Victoria-2" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\3\2.jpg" alt="Victoria-2" style=" clear:both;">
        <img class="smallpic" src="Information about properties\apartment&unit\3\3.jpg" alt="Victoria-3" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\3\3.jpg" alt="Victoria-3" style=" clear:both;">
        <img class="smallpic" src="Information about properties\apartment&unit\3\4.jpg" alt="Victoria-4" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\3\4.jpg" alt="Victoria-4" style=" clear:both;">
        <img class="smallpic" src="Information about properties\apartment&unit\3\5.jpg" alt="Victoria-5" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\apartment&unit\3\5.jpg" alt="Victoria-5" style=" clear:both;">
        </p>
        <p style="float:right;"><a href="#top"> -TOP- </a></p> 
          
       </div>
        
        </div>
<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>