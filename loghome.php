<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="nav.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Craft Valley</title>
  </head>
  <body>
		
<body style="background-color:#ECF0F1;"></body>

 <img style="float:left" src="image/ArtGalleryLogo.png"" alt="ArtGallery" >

<div class="header">

 
  <div class="header-right">
    <a class="active" href="index.html">Home</a>
    <a href="products.php">Products</a>
	<a href="sidebyside2.php">View Gallery</a>
	
	<a href="log_in_form.php">Log In</a> 
	
	<a href="loghome.php"> <img src="image/profile.png" width="30" height="30" style="float:right"></a>
	<a href="viewbasket.php"> <img src="image/cart.png" width="30" height="30" style="float:right"></a>
	
  </div>
</div>


<a href="log_in_form.php">log In Here</a>
<br>		 
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
