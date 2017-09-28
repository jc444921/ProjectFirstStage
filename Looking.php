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
<link href="css/imageresize.css" rel="stylesheet" type="text/css">
<link href="text.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/img.css" type="text/css">
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
<div class="row" style="padding-top: 5px; padding-left:24%;">
<label>
<span>Prices :</span><select name="selection">
<option value="Job Inquiry">100</option>
<option value="General Question">200</option>
<option value="Job Inquiry">300</option>
<option value="Job Inquiry">400</option>
<option value="Job Inquiry">500</option>
</select>
</label>
<label>
<span>Tpye :</span><select name="selection">
<option value="Job Inquiry">Student</option>
<option value="General Question">Traveller</option>
<option value="Job Inquiry">Worker</option>
<option value="Job Inquiry">Demi Pair</option>
</select>
</label>
<label>
<span>Nationality :</span><select name="selection">
<option value="Afghanistan">Afghanistan</option>
<option value="Andorra">Andorra</option>
<option value="Argentina">Argentina</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Bahrain">Bahrain</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Brazil">Brazil</option>
<option value="Canada">Canada</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Czech Republic">Czech Republic</option>
 <option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="Fiji">Fiji</option>
<option value="France">France</option>
<option value="Germany">Germany</option>
<option value="Guyana">Guyana</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland {Republic}">Ireland {Republic}</option>
<option value="Italy">Italy</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Korea South">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Laos">Laos</option>
<option value="Malaysia">Malaysia</option>
<option value="Mexico">Mexico</option>
<option value="Mongolia">Mongolia</option>
<option value="Myanmar, {Burma}">Myanmar, {Burma}</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="New Zealand">New Zealand</option>
<option value="Nigeria">Nigeria</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Poland">Poland</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Switzerland">Switzerland</option>
<option value="Taiwan">Taiwan</option>
<option value="Thailand">Thailand</option>
<option value="Turkey">Turkey</option>
<option value="Uganda">Uganda</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="Vietnam">Vietnam</option>
<option value="Yemen">Yemen</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</label>
<label>
<span>Gender :</span><select name="selection">
<option value="Job Inquiry">Any</option>
<option value="General Question">Male</option>
<option value="Job Inquiry">Female</option>
</select>
</label>
<label>
<span>Smoking :</span><select name="selection">
<option value="Job Inquiry">Any</option>
<option value="General Question">Yes</option>
<option value="Job Inquiry">No</option>
</select>
</label>
<label>
<span>Drinking :</span><select name="selection">
<option value="Job Inquiry">Any</option>
<option value="General Question">Yes</option>
<option value="Job Inquiry">No</option>
</select>
</label>
<label>
<span>Distance :</span><select name="selection">
<option value="Job Inquiry">1km</option>
<option value="General Question">2km</option>
<option value="Job Inquiry">3km</option>
<option value="Job Inquiry">4km</option>
<option value="Job Inquiry">5km</option>
</select>
</label>
<label>
<span>&nbsp;</span>
<input type="button" class="button" value="Send" />
</label>
</div>
</form>
<br>
<br>
<br>


    </section>
    <div style="padding-left:26%;"> 
    <img class="pic1" src="Images/1.jpeg" alt="HannabyStreet" style="  float:left; ">
	<img class="picbig1" src="Images/1.jpeg" alt="HannabyStreet" style="  float:left;">
    <img class="pic1" src="Images/2.jpeg" alt="HannabyStreet" style="  float:left; padding-left:6px;">
	<img class="picbig1" src="Images/2.jpeg" alt="HannabyStreet" style="  float:left;">
    <img class="pic1" src="Images/3.jpeg" alt="HannabyStreet" style="  float:left; padding-left:6px;">
	<img class="picbig1" src="Images/3.jpeg" alt="HannabyStreet" style="  float:left;">
    <img class="pic1" src="Images/4.jpeg" alt="HannabyStreet" style="  float:left; padding-left:6px;">
	<img class="picbig1" src="Images/4.jpeg" alt="HannabyStreet" style="  float:left;">
    <img class="pic1" src="Images/5.jpeg" alt="HannabyStreet" style="  float:left; padding-left:6px;">
	<img class="picbig1" src="Images/5.jpeg" alt="HannabyStreet" style="  float:left;">
    <img class="pic1" src="Images/6.jpeg" alt="HannabyStreet" style="  float:left; padding-left:6px;">
	<img class="picbig1" src="Images/6.jpeg" alt="HannabyStreet" style="  float:left;">
    <img class="pic1" src="Images/7.jpeg" alt="HannabyStreet" style="  float:left; padding-left:6px;">
	<img class="picbig1" src="Images/7.jpeg" alt="HannabyStreet" style="  float:left;">
   
    </div>
    <br><br><br><br>
    
    <div style="padding-left:24%;"> 
    <br><br><br><br><br><h1>Hot choices</h1>
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