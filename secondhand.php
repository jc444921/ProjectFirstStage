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
<link href="imageresize.css" rel="stylesheet" type="text/css">
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

    <h2 style="font-size: 190%">Welcome to <strong>Second Hand Requirement</strong>.</h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li><a href="apartment.php">• Go to Rent</a></li>
    <li><a href="Homestay.php">• Homestay</a></li>
    <li><a href="CommunicationBar.php">• Communication Bar</a></li>
    <li>• Support</li>
        <ul>
            <li><a href="notice.php" style="padding-left:7%">Notice for Rental</a></li>
            <li><a href="legalagent.php" style="padding-left:7%">Legal Agent Support</a></li>
            <li><a href="agreement.php" style="padding-left:7%">Agreement Form Models</a></li>
            <li style="padding-left:7%">Second Hand Requirements</a></li>
            	<ul>
                	<li><a href="#sofa">Sofa</a></li>
                    <li><a href="#chair">Chair</a></li>
                    <li><a href="#others">Others</a></li>
                </ul>
        </ul>
    <li><a href="AboutUs.php">• About Us</a></li>
  </ul>
</div>

<div class="col-9">
    <div class="row">
        <div class="col-s-12 col-12" id="sofa">
            <br><p><h1><u>Sofa</u></h1>           
                <img class="pic" src="Images/sofa.jpg" alt="HannabyStreet" style=" clear:both; float:left; padding: 2% 2%;">
                <img class="picbig" src="Images/sofa.jpg" alt="HannabyStreet" style=" clear:both; float:left; padding: 2% 2%;">
                <ul>
                    <br><br><br><br><li><strong>Key benefits:</strong></li>
                            <br>• SpunPoly cushions 
                            <br>• Powder coated aluminium frame will never corrode or rust
                            <br>• Machine welded joints on all aluminium frames 
                            <br>• Solid frame construction (no assembly required) 
                            <br>• Tempered glass 
                            <br>• 12 month warranty on cushions
                            <br>• 5 year structural warranty on frames 
                            <br>• Create your own configuration – we offer the flexibility to match any individual piece to create your ideal setting
                    <br><li><strong>Size:</strong></li>
                            <br>Corner - 80x80x66cm
                            <br>Middle - 70x80x66cm
                            <br>Coffee Table/Ottoman - 70x70x30cm         
                </ul> 
            </p>
        </div> 
    </div>

<div class="col-9">
    <div class="row" id="apartments">
        <div class="col-s-12 col-12" id="chair">
            <br><p><h1><u>Chair</u></h1>           
                <img class="pic" src="Images/chair.jpg" alt="HannabyStreet" style=" clear:both; float:left; padding: 2% 2%;">
                <img class="picbig" src="Images/chairview.jpg" alt="HannabyStreet" style=" clear:both; float:left; padding: 2% 2%;">
                <ul style="float:left;">
                    <br><li><strong>Features:</strong></li>
                        <li>Made of durable birch plywood</li>
                        <li>100% soft cotton fabric</li>
                        <li>Available in black or beige</li>
                        <li>Simple and ergonomic design</li>
                        <li>5-range adjustable footrest (0 - 90 degrees)</li>
                        <li>4cm thick, 20D high density foam</li>
                        <li>Steel and heavy-duty polypropylene interior structure</li>
                        <li>Removable and washable zipper cover</li>
                        <li>Padding: sponge filling</li>
                        <li>Steel pipe diameter: 19 mm</li>
                        <li>Maximum weight allowance: 150kg</li>
                        <li>Assembly manual included</li>
                    <br><li><strong>Dimensions:</strong></li>
                        <li>Overall: 101cm H x 90cm W x 66cm D</li>
                        <li>Overall Product Weight: 9.8 Kilogram</li>      
                </ul> 
            </p>
        </div> 
    </div>
</div>
 <div class="col-9">
    <div class="row" id="apartments">
        <div class="col-s-12 col-12" id="bed">
            <br><p><h1><u>Bed</u></h1>           
                <img class="pic" src="Images/bed.jpg" alt="HannabyStreet" style=" clear:both; float:left; padding: 2% 2%;">
                <img class="picbig" src="Images/bedview.jpg" alt="HannabyStreet" style=" clear:both; float:left; padding: 2% 2%;">
                <ul style="float:left;">
                    <br><li><strong>Rawson & Co Black Matisse Metal Bed Frame</strong></li>
                        <li>The Bed Frame is made of high quality metal with a complimented modern design, 
                        	<br>appealing to all Australian homes</li>
					<br><li><strong>Features:</strong></li>
                        <li>Colour: Black</li>
                        <li>Modern style</li>
                        <li>Consists of quality steel construction with glass paint finish</li>
                        <li>Wooden slats (Bowed Plywood)</li>
                        <li>Flat packed Assembly instruction manual is included</li>
                        <li>Product Details:</li>
                        <li>Assembly Required: Yes</li>
                    <br><li><strong>Dimensions:</strong></li>
                        <li>King Single / Black Size / Colour</li>
                        <li>Overall: 107cm W x 203cm D</li>
                        <li>Double / Black Size / Colour</li>
                        <li>Overall: 138cm W x 188cm D</li>
                        <li>Queen / Black Size / Colour</li>
                        <li>Overall: 153cm W x 203cm D</li>
                        <li>King / Black Size / Colour</li>
                        <li>Overall: 183cm W x 203cm D</li>
                        <li>Overall: 110cm H</li>
                        <li>Overall Product Weight: 40 Kilogram</li>     
                </ul> 
            </p>
        </div> 
    </div>
    </div>
</div>
</div>


<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>