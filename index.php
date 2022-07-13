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




 <body style="background-color:#ECF0F1;">
 
   </body>
<?php
if(isset($_SESSION["user"]))
{
	echo "You are Logged in as ";
	echo $_SESSION['user'];
	echo " with Admin Level ";
	echo $_SESSION['admin'];
	echo "<br><a href='logout.php'>log out</a><br>";
	if($_SESSION["admin"]==1)
	{
		echo "You are a super user<br>You have extra rights<br>";
		echo "<a href='#'>Kill all</a><br>";
	}
	
}
else
{
	echo $_SESSION['user'];
}
?>

</body>
</html>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="header">
 
  <body style="background-color:#ECF0F1;">
 
   </body>
 
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href="products.php">Products</a>
	<a href="sidebyside2.php">View Gallery</a>
	
	<a href="log_in_form.php">Log In</a> 
	
	<a href="loghome.php"> <img src="image/profile.png" width="30" height="30" style="float:right"></a>
	<a href="viewbasket.php"> <img src="image/cart.png" width="30" height="30" style="float:right"></a>
	
  </div>
</div>
</body>
</html>








<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/wall1.png" style="width: 100%;height: 600px;">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/wall2.png" style="width: 100%;height: 600px;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/wall3.png" style="width: 100%;height: 600px;">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 


<br>
<br>
<br>

<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>



<div class="row">
  <div class="column">
    <img src="image/home1.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="image/home2.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="image/home3.jpg" alt="Mountains" style="width:100%">
  </div>
</div>

</body>
</html>

<br>



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





