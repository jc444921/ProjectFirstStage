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

    <h2 style="font-size: 190%"><b>Welcome to Homestay!</b></h2>

<div class="row">

<div class="col-3 col-s-12 menu">
  <ul>
  	<li><a href="#">• Go to Rent</a></li>
    <li><a href="#">• Homestay</a></li>
    <li><a href="#">• Communication Bar</a></li>
    <li>• Support</li>
    <ul>
        <li style="padding-left:7%">Notices for you:</li>
        <ul>
            <li><a href="#increase" style="padding-left:15%">Rental increase</a></li>
            <li><a href="#repairs" style="padding-left:15%">Rights to repairs</a></li>
            <li><a href="#bonds" style="padding-left:15%">Getting your bond back</a></li>
            <li style="padding-left:15%">More info please check <a href="https://www.choice.com.au/money/property/renting/articles/rental-rights-you-didnt-know-you-had"><b>www.choice.com.au</b></a></li>
        </ul>
        <li><a href="legalagent.html" style="padding-left:7%">Legal Agent Support</a></li>
        <li><a href="agreement.html" style="padding-left:7%">Agreement Form Models</a></li>
        <li><a href="secondhand.html" style="padding-left:7%">Second Hand Requirements</a></li>
    </ul>
    <li><a href="#">• About Us</a></li>
  </ul>
</div>

<div class="col-9">

  <p><b class="smalltitle" id="increase">What is Homestay?</b>
<br>
<div class="col-s-12 col-12" id="homestay-content">
<p>Homestay is a popular form of hospitality and lodging whereby visitors stay in a house or apartment of a local of the city to which they are traveling. <span style="display:none;" id="expand-text">your rent generally can't be increased unless it's been written into your tenancy agreement.The length of stay can vary from one night to even a year and can be free.in exchange for monetary compensation, in exchange for a stay at the guest's property either simultaneously or at another time (home exchange), or in exchange for help on the host's property.</span> <a id="expand-click" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click','expand-text','inline')"> Read more</a></p>
<img src="Images/rental increase.gif" alt="increase">
</div>
</p>

    <p><b class="smalltitle" id="repairs">Why choose our Homestay?</b>
    <p>
    Our site select the best homes of Australia’s best Universities,we have partnered with these providers to offer premium homestay options which are affordable and suited to your needs.<span style="display:none;" id="expand-text1">
    Our dedicated team have over a decade of involvement in homestay and are always here to provide advice and to support you during your homestay. We want to ensure you benefit from your homestay experience and that you enjoy your time living in this beautiful city. 
    You can't stop paying your rent if your landlord doesn't do the repairs. But you may be entitled to apply to your relevant tenancy tribunal to have your rent paid into a special account until the repairs are done.So what sort of repairs and maintenance are covered? For non-urgent repairs, the standard of repairs you can expect will differ depending on:</span> <a id="expand-click1" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click1','expand-text1','inline')"> Read more</a></p>
    </p>
    
    <ul>
            <li>the state of the property when you moved in</li>
            <li>the age of the property and its prospective life, and</li>
            <li>the price you pay for the property (potentially).</li>
    </ul>
    
    <br>Excessive mould as a result of structural issues or broken elements on a stove top are common and non-urgent issues where tenants should be entitled to repairs, according to the Tenants' Union of Victoria.It seems tenants are often too scared to ask for repairs for fear of being kicked out. A survey by the Tenants' Union of NSW in 2014 found 77% of respondents had put up with a problem because they were worried about adverse consequences if they asked to get it fixed.
    <br>
    
    
    <p><b class="smalltitle" id="bonds">Getting your bond back</b>
<br>
<p>When you pay your bond, in most states and territories you're required to lodge it with the relevant bond authority so that if there's a dispute at the end of your lease, the money is held with a third party. <span style="display:none;" id="expand-text2">This also means you can apply for your bond back independently if the landlord doesn't sign off on the bond in a timely fashion, or if you disagree.
"The idea that your landlord won't give your bond back is a bit of a furphy," says Ned Cutcher, senior policy officer at the Tenants' Union of NSW. As soon as your tenancy is over in New South Wales, you have the right to unilaterally apply to the NSW Civil and Administrative Tribunal (NCAT) to get your bond back – that is, "you don't need to wait for your landlord to sign off", Cutcher says. The landlord must then make a case to the bond board in a timely fashion if there's anything they want to complain about.
It's a similar story in Victoria. As a tenant you can apply directly to the Victorian Civil and Administrative Tribunal (VCAT) if you can't reach an agreement with the landlord on your application to the bond board. If the landlord intends to make a claim on the bond, they must do so within 10 days of the tenancy agreement finishing.
</span> <a id="expand-click2" href="javacript:;" style="text-decoration:none;" onClick="show_text('expand-click2','expand-text2','inline')"> Read more</a></p>
</p>
    <p><a href="https://www.choice.com.au/money/property/renting/articles/rental-rights-you-didnt-know-you-had">More info please check this website <b>www.choice.com</b></a></p>
    <p style="float:right;"><a href="#top"> -TOP- </a></p>
</div>

</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>