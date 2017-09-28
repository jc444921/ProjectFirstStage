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

    <h2 style="font-size: 190%"><b>Welcome to Achievements Page!</b></h2>

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
  <h1>Rate My Agency 2017</h1>
  <p style="clear:both;">
  <img src="ratemyagent.jpg" alt="ratemyagent" style="width:24%; height:50%;">
  </p>
  <br> AGENCY OF THE MONTH
  <p>The awards, which are the largest real estate awards in Australia, recognise those agents and agencies that have ranked the highest based on customer reviews and feedback.  
  <br>The RateMyAgent Agent of the Year Awards compare over 26,000 agents and agencies across the country.  They highlight the leading real estate agents and agencies in each suburb, city and state across Australia, and on a national level. <br>
<br>“The RateMyAgent Agent of the Year Awards are the only awards which use verified customer reviews and feedback, so they’re an honest feedback of the customer service an agent has provided,” said RateMyAgent CEO & Co-Founder, Mark Armstrong.  “These awards are the only industry awards to put sellers' needs first, using customer reviews as a leading indicator of an agent's success over 2016.” <br><br><br>
<br>Rental House has won Agency Of The Month in the RateMyAgent 2017 Agent of the Year Awards in a number of local suburbs including:<br><br>
<br>~ Brisbane CBD
<br>~ Kelvin Grove
<br>~ Spring Hill 
<br>~ Kangaroo Point
<br>~ South Bank
<br>~ New Farm


      <h1>HIRE INDUSTRY EXCELLENCE AWARDS</h1>
  <p>Recognising outstanding achievement and industry excellence, the Hire Industry Excellence Awards pay tribute to the exceptional standards of service and innovation displayed throughout the hire sector.
<br>
<br>Categories of entry

<br>
<br>It has three decently sized bedrooms with a semi ensuite bathroom with separate bath and shower. Toilet is separate to the bathroom which is good for when you have guests.
<br>
<br>The Hire Industry Excellence Awards cover rental, supplier, product and exhibitor categories, including:
<br>
<br>Rental Company of the Year
<br>Supplier of the Year
<br>Best New Product<br>
<br><h2>Best Exhibition Stand</h2>
  <img src="Hire Industry Excellence Awards Logo 2 (1).png" alt="hire industry excellence" style="width:30%; height:25%; float:left; padding: 2% 2%;"><br>
<p>The winner of the Rental Company of the Year will receive:
<br>A full delegate registration to the next Convention
<br>Three night’s accommodation for two (double or twin share)
<br>Return air fares for two
<br>Winning logo to promote ‘Rental Company of the Year’ for use on advertising material
<br>Promotion in the Hire and Rental News Magazine as the winner
<br>Exclusive Rental Company of the Year winners trophy
<br>
<br>
<br>Benefits of entering
<br>
<br>The prestigious Hire Industry Excellence Awards are a showcase of members of the HRIA who provide outstanding service in all categories of the hire and rental market. Our former finalists have said they increased their business and saw increased respect from their existing customer base for their achievement.
<br>
<br>
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