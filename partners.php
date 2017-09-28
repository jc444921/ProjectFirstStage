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

    <h2 style="font-size: 190%"><b>Our proud partners</b></h2>

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
  <h1>In association with ~</h1>
  <p style="clear:both;">
  <br>
 <br><a href="https://www.brisbane.qld.gov.au/"><img src="Citycouncil.png" alt="citycouncil" style="width:15%; height:30%;"></a>
 	<a href="http://www.newscorpaustralia.com/brand/sunday-mail"><img src="Sundaymail.png" alt="sundaymail" style="width:15%; height:30%;"></a>
 <a href="https://www.goodlifehealthclubs.com.au/"><img src="Goodlife.png" alt="goodlife" style="width:15%; height:30%;"></a>
  <br>

  </p>
  <br>
  <br>

      <h1>Other partner sites</h1>
  <p>Fellow rental accomodation partners we network with: 
<br>
<a href="https://www.domain.com.au/">Domain.com</a>| <a href="https://www.seek.com.au/">Seek.com</a> | <a href="https://flatmates.com.au/">Flatmates.com</a>
    </p>

</div>
</div>
<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>

</div>
</body>
</html>