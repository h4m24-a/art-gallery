<?php 
session_start();




?>
<link rel="stylesheet" type="text/css" href="style.css">
 <img style="float:left" src="image/ArtGalleryLogo.png"" alt="ArtGallery" >
 <link rel="stylesheet" type="text/css" href="nav.css">
 
 
 <body style="background-color:#ECF0F1;">
 
   </body>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>

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

<html>
<head>
<title>Profile</title>
</head>
<body>
<a href="log_in_form.php">log In Here</a><br>
<br>
<a href="registerform.php">Register Here</a><br>
<br>
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
	echo "You are not logged in";
}
?>

</body>
</html>