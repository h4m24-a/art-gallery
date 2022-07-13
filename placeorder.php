<?php
$servername = "localhost";
$username = "csuclcom_sdb9";
$password = "pass_385!";
$dbname = "csuclcom_sdb9";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}
?>


<head>

<title> Craft Valley</title>
</head>


<img style="float:left" src="image/ArtGalleryLogo.png"" alt="ArtGallery" >
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="CSS/imagehome.css">
<link rel="stylesheet" type="text/css" href="checkout.css">




 <body style="background-color:#ECF0F1;">
 
   </body>




<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="header">
 
  <body style="background-color:#ECF0F1;">
 
   </body>
 
  <div class="header-right">
    <a class="active" href="index.html">Home</a>
    <a href="products.php">Products</a>
	<a href="sidebyside2.php">View Gallery</a>
	
	<a href="log_in_form.php">Log In</a> 
	
	<a href="loghome.php"> <img src="image/profile.png" width="30" height="30" style="float:right"></a>
	<a href="viewbasket.php"> <img src="image/cart.png" width="30" height="30" style="float:right"></a>
	
  </div>
</div>
</body>
</html>


<style>
h1{
font-family: Bahnschrift SemiBold;
color: black;
font-size: 40px;
text-align:center;
}

h2{
font-family: Bahnschrift SemiBold;
color: black;
font-size: 18px;
text-align:center;
}


</style>
<div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
    <h2>Thank you for ordering with us, we'll contact you by email with your order details.</h2>
</div>

 <head><title>blank lines</title><body><script>for(var x=0;x<=25;x++){document.write("<br>")}</script></body></head></HTML>

<footer>

<br>
<p class="cp-text" style="float:left; margin:15px; font-family:Arial">
     Copyright 2021 Craft Valley. All rights reserved.
</p>


<a  href="https://www.instagram.com/">
<img src="image/instagram.png"  width="25" height="25" style="float:right; margin:15px">

</a>

<a  href="https://www.twitter.com/">
 <img src="image/twitter.png"  width="25" height="25" style="float: right; margin:15px">
</a>

<a  href="https://www.facebook.com/">
 <img src="image/facebook.png"  width="25" height="25" style="float: right; margin:15px">
</a>


</footer>

