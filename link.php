<?php
session_start();
include_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color:#1676BC;
    color:white;
    padding: 2px 0 12px 0 ;
}
.header img {
	margin-top:-2px;
	margin-right:3em;
	float:left;
	width: 15%;
	height: 12%;
}
.header h2 {
	clear:both;
	margin-top: 3px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color: #33b5e5;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #0099cc;
}
.aside {
    background-color: #33b5e5;
    padding: 15px;
    color: #ffffff;
    text-align: center;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.smalltitle {
	font-size: 150%;
	color:#0C22CD;
}
.footer {
    background-color: #1676BC;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 15px;
}
</style>
<link href="rental.css" rel="stylesheet" type="text/css">
<script>
	function run_first() {
		var id_var = sessionStorage.li_id;
		if(id_var) {
			document.getElementById(id_var).style.backgroundColor = "gray";
		}
	}
	
	function nav_item_selected(li_id) {	
		for(i = 0; i < 6; i++) {
			document.getElementById(i.toString()).style.backgroundColor = "";
		}
		document.getElementById(li_id.toString()).style.backgroundColor = "gray";
		
		//store li_id in sessionStorage
		sessionStorage.li_id = li_id.toString();		
	}
	
</script>

<?php include("nav.inc");?>
</head>
<body>

<div class="header">
<img src="LOGO for team 2.png" alt="logo">
  <h1 style="font-size:250%" id="top">Rental House</h1>
</div>

    <h2 style="font-size: 190%"><b>Our trusted Links!</b></h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li><a href="apartment.html">• Go to Rent</a></li>
    <li><a href="Homestay.html">• Homestay</a></li>
    <li><a href="CommunicationBar.html">• Communication Bar</a></li>
    <li><a href="notice.html">• Support</a></li>
    <li style="padding-left:7%">• Go to About Us</li>
    <ul>
        	<li><a href="AboutUs.html" style="padding-left:15%">Contact Us</a></li>
            <li><a href="achievements.html" style="padding-left:15%">Achievements</a></li>
            <li><a href="link.php" style="padding-left:15%">Link</a></li>
            <li><a href="partners.php" style="padding-left:15%">Partners</a></li>
        </ul>
  </ul>
</div>

<div class="col-9">
  <h1>Agrregators of Rental House</h1>
  <p style="clear:both;">
  <br><br>Top Links
 <br><img src="choice.jpg" alt="choice" style="width:10%; height:20%;">
  <br>CHOICE

  </p>
  <br> 
  <p>Independent and member-funded, CHOICE is here to ensure that Australian consumers like you get a fair go.<br>
  <br>CHOICE is not just a home and living aggregator, they're also a food & beverage, transport & travel, shopping and even electrical appliance advisors. <br>
  **<a href="https://www.choice.com.au/home-and-living">Find us in Choice</a>
<br><br><br><br>
<img src="trivago.jpg" alt="trivago" style="width:10%; height:20%;">
<br>TRIVAGO
  
  </p>
  <br> 
  <p>Trivago has developed into a powerful global brand inspired by a transparent and authentic culture, which impacts the quality and efficiency of their daily execution. <br>
  **<a href="https://www.trivago.com.au/brisbane-44311/hotel">Find us in Trivago</a>
<br><br><br><br>
<img src="gumtree.jpg" alt="trivago" style="width:10%; height:20%;">
<br>GUMTREE
  
  </p>
  <br> 
  <p>Gumtree is a vast platform for buyers and sellers to come together about almost anything. One main feature of this is rental facilities where Rental House has been linked under. <br>
  **<a href="https://www.gumtree.com.au/s-property-for-rent/c18364?sort=rank">Find us in Gumtree</a>
<br><br><br>
</p>

      <h1>Other important links</h1>
  <p>Our networks are spread all across a number of platforms. A few important links in our network can be found below: 
<br>
<p>Domain.com <br>
  <a href="https://www.domain.com.au/?mode=rent">Find us on Domain</a>
<br><br>
</p>

<p>Rent.com <br>
  <a href="https://www.domain.com.au/?mode=rent">Find us on Rent</a>
<br><br>
</p>
<p>Rentfind.com <br>
  <a href="http://www.rentfind.com.au/">Find us on Rentfind</a>
<br><br>
</p>
<p>Allhomes.com <br>
  <a href="https://www.allhomes.com.au/">Find us on Allhomes</a>
<br><br>
</p>



    <p style="float:right;"><a href="#top"> -TOP- </a></p>
    </p>
    </p>

</div>
</div>
<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>

</div>
</body>
</html>