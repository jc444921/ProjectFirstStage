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
<script src="js/display.js"></script>
<link rel="stylesheet" href="css/nav_responsive.css" type="text/css">
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
        	<li><a href="apartment.html" style="padding-left:15%">Apartment and Unit</a></li>
            <li><a href="house.html" style="padding-left:15%">House</a></li>
            <li><a href="townhouse.php" style="padding-left:15%">Townhouse</a></li>
            <li><a href="villa.php" style="padding-left:15%">Villa</a></li>
        </ul>
    <li><a href="#">• Homestay</a></li>
    <li><a href="#">• Communication Bar</a></li>
    <li><a href="notice.html">• Support</a></li>
    <li><a href="#">• About Us</a></li>
  </ul>
</div>
<h1>Want to find a family in here? click to get it!</h1>
<div class="col-4">
  
  <h2>Good for students</h2>

<ol>
  <li>No fees at all</li>	
  <li>No 'insurances'</li>
  <li>No commission</li>
  <li>You search & find your ideal accommodation</li>
</ol>
<img src="images/one (1).jpg">
<div style="clear:both;">



</div> 


 </div>
 <div class="col-4" >
 <h2>Good for homestay hosts</h2>

<ol>
  <li>Deal directly with guests</li>	
  <li>Set your own fee</li>
  <li>No commission</li>
  <li>You choose perfect guest rather than agency making choice</li>
</ol>
<img src="images/one.jpg">
<p><b class="smalltitle" id="bonds"></b>
</p>
</div>
</div>
<div class="feature-divider"></div>
<section>
<div class="oss-search-toolbar">
<div class="container-fluid">
<div class="row" style="padding-top: 5px; padding-left:24%;">
<input id="budgetmin" name="budgetmin" type="hidden" value="100">
<input id="budgetmax" name="budgetmax" type="hidden" value="500">
<div class="form-group col-1">
    <div>
    $<span class="oss-slider-val" id="budgetminval">100</span> -
    $<span class="oss-slider-val" id="budgetmaxval">500</span>
    <span class="hidden-sm">per week</span>
    </div>
    <div id="budgetslider" class="oss-slider" style="popwidth:240px"></div>
</div>
<div class="form-group col-1" style="margin-right:18px;">
    <div>
    <span class="oss-slider-val" >Sort</span>
    </div>
<select class="form-control input-sm" id="sort" name="sort">

<option value="latest">Latest</option>
<option value="from">From</option>
<option value="expensive">Budget High</option>
<option value="cheapest">Budget Low</option>
</select>
</div>
<div class="form-group col-1">
    <div>
    <span class="oss-slider-val">Type</span>
    </div>
<select name="guest_type" id="guest_type" class="form-control input-sm">
<option value="-">Any</option>
<option value="student">Student</option>
<option value="traveller">Traveller</option>
<option value="worker">Worker</option>
<option value="demi pair">Demi Pair</option>
</select>
</div>
<div class="form-group col-3" style="margin-right:30px;">
    <div>
    <span class="oss-slider-val">Place of Study</span>
    </div>
<select name="placeofstudy" id="placeofstudy" class="form-control input-sm">
<option value="-">Any</option>
<option value="academia international">academia international</option>
<option value="ACU">ACU</option>
<option value="Airline academy of Australia">Airline academy of Australia</option>
<option value="Australia Institute of Business and technology">Australia Institute of Business and technology</option>
<option value="Australian Catholic uni">Australian Catholic uni</option>
 <option value="UQ">UQ</option>
<option value="viva college">viva college</option>
</select>
</div>
    <div class="form-group col-1" id="campus-container" style="margin-right:-25px;">
        <div>
        <span class="oss-slider-val">Campus</span>
        </div>
    <select class="form-control input-sm" id="campus" name="campus">
    <option value="-">Any</option>
    </select>
    </div>
<div class="form-group col-1">
    <div>
    <span class="oss-slider-val">Nationality</span>
    </div>
<select name="country" id="country" class="form-control input-sm">
<option value="-">All</option>
<option value=""></option>
<option value="Afghanistan">China</option>
<option value="Andorra">Japen</option>
<option value="Argentina">Korean</option>
<option value="Australia">Australia</option>
<option value="Bahrain">Bahrain</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>

</select>
</div>
    <div class="form-group col-1">
        <div>
        <span class="oss-slider-val">Gender</span>
        </div>
    <select class="form-control input-sm" id="gender" name="gender">
    <option value="-">Any</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    </select>
    </div>
    <div class="form-group col-1">
        <div>
        <span class="oss-slider-val">Smoking</span>
        </div>
    <select class="form-control input-sm" id="smoking" name="smoking">
    <option value="-">Any</option>
    <option value="yes">Yes</option>
    <option value="no">No</option>
    </select>
    </div>
    </div>
    </div>
    </div>
    </section>
    <div style="padding-left:26%;"> 
    <img src="images/1.jpg" >
    <img src="images/2.jpg">
    <img src="images/3.jpg">
    <img src="images/4.jpg">
    <img src="images/5.jpg">
    <img src="images/6.jpg">
    <img src="images/7.jpeg">
    </div>
    <div style="padding-left:24%;"> 
    <h1>Hot choices</h1>
    <p><h2>Desciption:</h2>After experiencing this super-convenient home, nothing else will satisfy you. <span style="display:none;" id="expand-text">
  A 3 bedroom, 1 bathroom, 1 toilet, single-storey, dwelling, it's situated in the heart of Maylands, City views and close to Peninsula Golf Course.
But its position is only part of what this property's all about... A home can be central to everything, but that's not enough; it also has to have the right feeling about it. One look and you'll find it hard to disagree - this home does.
And you haven't even taken in its features yet: Single carport, wall unit aircon, timber decked verandah, and 2 rooms with robes. Not to mention its gas cooking, shed, and storage room. Plus you'll particularly like its easy care gardens, undercover patio, enticing cityscape views, and rear villa. Sorry no pets allowed.
With such a wide range of features, this home will be snapped up very quickly. Don't miss this opportunity. Call 08 9378 2555 now to arrange an inspection.</span> <a id="expand-click" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click','expand-text','inline')"> Read more</a></p>
  <img src="images/11.jpeg" alt="villa2-1" style="width:45%; height:40%; float:left; padding: 2% 2%;"><br><br><br>
<br>General Features
<br>Property Type:Villa
<br>Bond:$2,400
<br>Indoor Features
<br>Built-in Wardrobes
<br>Air Conditioning
<br>Outdoor Features
<br>Carport Spaces:1
<br>Shed
<br>Fully Fenced
<br>Floorplans & Interactive Tours
</p>
</div>
<div style="padding-left:24%;"><br><br><br><br><br><br><br><br><br><br><br>
    <p><h2>Desciption:</h2>nothing else will satisfy you. it's situated in the heart of Maylands, City views and close to Peninsula Golf Course.<span style="display:none;" id="expand1-text">
  <br>A 3 bedroom, 1 bathroom, 1 toilet, single-storey, dwelling, it's situated in the heart of Maylands, City views and close to Peninsula Golf Course.
But its position is only part of what this property's all about... A home can be central to everything, but that's not enough; it also has to have the right feeling about it. One look and you'll find it hard to disagree - this home does.
And you haven't even taken in its features yet: Single carport, wall unit aircon, timber decked verandah, and 2 rooms with robes. Not to mention its gas cooking, shed, and storage room. Plus you'll particularly like its easy care gardens, undercover patio, enticing cityscape views, and rear villa. Sorry no pets allowed.
With such a wide range of features, this home will be snapped up very quickly. Don't miss this opportunity. Call 08 9378 2555 now to arrange an inspection.</span> <a id="expand1-click" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand1-click','expand1-text','inline')"> Read more</a></p>
  <img src="images/22.jpeg" alt="villa2-1" style="width:45%; height:40%; float:left; padding: 2% 2%;"><br><br><br>
<br>General Features
<br>Property Type:Villa
<br>Bedrooms:3
<br>Bathrooms:1
<br>Bond:$1,400
<br>Indoor Features
<br>Built-in Wardrobes
<br>Shed
<br>Fully Fenced
<br>Floorplans & Interactive Tours
</p>
</div>
 <div style="padding-left:24%;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
    <p><h2>Desciption:</h2> 1 bathroom, 1 toilet, single-storey, dwelling, it's situated in the heart of Maylands, City views and close to Peninsula Golf Course.<span style="display:none;" id="expand2-text">
But its position is only part of what this property's all about... A home can be central to everything, but that's not enough; it also has to have the right feeling about it. One look and you'll find it hard to disagree - this home does.
And you haven't even taken in its features yet: Single carport, wall unit aircon, timber decked verandah, and 2 rooms with robes. Not to mention its gas cooking, shed, and storage room. Plus you'll particularly like its easy care gardens, undercover patio, enticing cityscape views, and rear villa. Sorry no pets allowed.
With such a wide range of features, this home will be snapped up very quickly. Don't miss this opportunity. Call 08 9378 2555 now to arrange an inspection.</span> <a id="expand2-click" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand2-click','expand2-text','inline')"> Read more</a></p>
  <img src="images/33.jpeg" alt="villa2-1" style="width:45%; height:40%; float:left; padding: 2% 2%;"><br><br><br><br><br><br>
<br>General Features
<br>Property Type:Villa
<br>Bedrooms:3
<br>Bathrooms:1
<br>Bond:$1,400
<br>Air Conditioning
<br>Outdoor Features
<br>Carport Spaces:1
<br>Shed
<br>Fully Fenced
<br>Floorplans & Interactive Tours
</p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


    
    
 <p style="float:right;"><a href="#top"> -TOP- </a></p>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>
</body>
</html>