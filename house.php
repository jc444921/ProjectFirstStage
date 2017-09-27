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
<script src="js/show_text.js"></script>
<link rel="stylesheet" href="css/nav_responsive.css" type="text/css">
<?php include("include/nav.inc")?>


</head>
<body>

<div class="header">
<img src="Images/LOGO for team 2.png" alt="logo">
  <h1 style="font-size:250%" id="top">Rental House</h1>
</div>

    <h2 style="font-size: 190%"><b>Welcome to House Page!</b></h2>

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
<p><h1><u>14 Kerry Avenue Roselands</u></h1>
       <ul>
       	<br><li><strong>$480 PER WEEK</strong></li>
		<br><li>Date Available: Thu 16-Oct-17</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text">
        <br>Beautifully maintained and set amongst enchanting landscaped gardens is this classically appealing period residence. 
        <br>
		<br>This delightful double fronted home has been refurbished with sensitivity and style.
        <br>
		        
        </span>
                      
        <a id="expand-click" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click','expand-text','inline')"> Read more</a>
        <br>
    	<br><strong>Book a viewing today. </strong>
      	<span style="display:none;" id="expand-text-agent1">
        <ul>
        <li>AGENT NAME : MANU PRAVEEN</li>
        <li>AGENT CONTACT NUMBER: 0445891592</li>
        </ul>
        </span>            
        <a id="expand-click-1" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-1','expand-text-agent1','inline')">Click for agent details </a>
        
</p>
</div>
 
</div>
  

<p><img class="pic" src="Information about properties\house\1\1.jpg" alt="KerryAvenue" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\house\1\1.jpg" alt="KerryAvenue" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:House</li>
            <br><li id="3bedroom">Bedrooms:3</li> 
            <br><li>Bathrooms:1</li>
            <br><li>Bond:$1,300</li>
            <br><li>Indoor Features</li>
            <br><li>Air Conditioning</li>
            <br><li>Garage Spaces:1</li>
            <br><li>Large Garden</li>
        </ul>
        </p>
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
        <img class="smallpic" src="Information about properties\house\1\2.jpg" alt="KerryAvenue" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\1\2.jpg" alt="KerryAvenue" style=" clear:both;">
        <img class="smallpic" src="Information about properties\house\1\3.jpg" alt="KerryAvenue" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\1\3.jpg" alt="KerryAvenue" style=" clear:both;">
        <img class="smallpic" src="Information about properties\house\1\4.jpg" alt="KerryAvenue" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\1\4.jpg" alt="KerryAvenue" style=" clear:both;">
        <img class="smallpic" src="Information about properties\house\1\5.jpg" alt="KerryAvenue" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\1\5.jpg" alt="KerryAvenue" style=" clear:both;">
        </p>
        
                 </div>
        
        </div>
        
        
        
 <div class="row">
<div class="col-3 col-s-12 menu">
  </div>

<div class="col-9">
<div class="row" id="apartments1">
       <div class="col-s-12 col-12" id="apartment2">
<p><h1><u>6/1 Walnut Way</u></h1>
       <ul>
       	<br><li><strong>$310 PER WEEK</strong></li>
		
		<br><li>Date Available: Thu 18-Oct-17</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text2">
        <br>Located on the Northside of Pakenham this unit will be sure to suit any type of person or family wanting to move in.
        <br>
		<br>Open plan living, dining and kitchen make up the main hub of the home with the kitchen fitted out with stainless steel appliances. 

                
        </span>
                      
        <a id="expand-click2" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click2','expand-text2','inline')"> Read more</a>
        <br>
    	<br><strong>Book a viewing today. </strong>
      	<span style="display:none;" id="expand-text-agent3">
        <ul>
        <li>AGENT NAME : BARRY PLANT</li>
        <li>AGENT CONTACT NUMBER: 03 5941 1977</li>
        </ul>
        </span>            
        <a id="expand-click-3" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-3','expand-text-agent3','inline')">Click for agent details </a>
        
</p>
</div>
 
</div>
  

<img class="pic" src="Information about properties\house\2\1.jpg" alt="Walnutway" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\house\2\1.jpg" alt="Walnutway" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:Unit</li>
            <br><li>Bedrooms:3</li> 
            <br><li>Bathrooms:2</li>
            <br><li>Bond:$1,347</li>
            <br><li>Outdoor Features</li>
            <br><li>Garage Spaces:2</li>
        </ul>
      
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
                   
        <img class="smallpic" src="Information about properties\house\2\2.jpg" alt="Walnutway" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\2\2.jpg" alt="Walnutway" style=" clear:both;">
        <img class="smallpic" src="Information about properties\house\2\3.jpg" alt="Walnutway" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\2\3.jpg" alt="Walnutway" style=" clear:both;">
        <img class="smallpic" src="Information about properties\house\2\4.jpg" alt="Walnutway" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\2\4.jpg" alt="Walnutway" style=" clear:both;">
        <img class="smallpic" src="Information about properties\house\2\5.jpg" alt="Walnutway" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\2\5.jpg" alt="Walnutway" style=" clear:both;">
        </p>
        
         
       </div>
        
        </div>

        
 <div class="row">
<div class="col-3 col-s-12 menu">
  </div>

<div class="col-9">
<div class="row" id="apartments3">
       <div class="col-s-12 col-12" id="apartment4">
<p><h1><u>191 Ladywood Road Modbury Heights</u></h1>
       <ul>
       	<br><li><strong>$420 PER WEEK</strong></li>
		
		<br><li>Date Available: Thu 29-Sep-17</li>       
        
       </ul>
       
        <span style="display:none;" id="expand-text4">
        <br>Low Maintenance 3 Bedroom Home in a Great Location.
        		

       
        </span>
                      
        <a id="expand-click4" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-4','expand-text4','inline')"> Read more</a>
        <br>
    	<br><strong>Book a viewing today. </strong>
      	<span style="display:none;" id="expand-text-agent4">
        <ul>
        <li>AGENT NAME : ROSS GELLER</li>
        <li>AGENT CONTACT NUMBER: 0452374589</li>
        </ul>
        </span>            
        <a id="expand-click-4" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click-4','expand-text-agent4','inline')">Click for agent details </a>
        
</p>
</div>
 
</div>
  

<p><img class="pic" src="Information about properties\house\3\1.jpg" alt="ladywood" style=" clear:both; float:left; padding: 2% 2%;">
<img class="picbig" src="Information about properties\house\3\1.jpg" alt="ladywood" style=" clear:both; float:left; padding: 2% 2%;">

        <strong><u>General Features</u></strong>
        <ul style="float:left;">
            <br><li>Property Type:House</li>
            <br><li id="2bedroom">Bedrooms:2</li> 
            <br><li>Bathrooms:2</li>
            <br><li>Bond:$1,500</li>
            <br><li>Outdoor Features</li>
            <br><li>Garage Spaces:1</li>
            
        </ul>
        </p>
        <p style="clear:both;"><b><u>Floorplans &amp; Interactive Tours</u></b></p>
        <p style="clear:both;">
       <img class="smallpic" src="Information about properties\house\3\2.jpg" alt="ladywood" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\3\2.jpg" alt="ladywood" style=" clear:both;">
        <img class="smallpic" src="Information about properties\house\3\3.jpg" alt="ladywood" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\3\3.jpg" alt="ladywood" style=" clear:both;">
        <img class="smallpic" src="Information about properties\house\3\4.jpg" alt="ladywood" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\3\4.jpg" alt="ladywood" style=" clear:both;">
        <img class="smallpic" src="Information about properties\house\3\5.jpg" alt="ladywood" style=" clear:both;">
        <img class="smallpiclarge" src="Information about properties\house\3\5.jpg" alt="ladywood" style=" clear:both;">
        </p>
         <p style="float:right;"><a href="#top"> -TOP- </a></p>
       </div>
        
        </div>
<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>
</body>
</html>