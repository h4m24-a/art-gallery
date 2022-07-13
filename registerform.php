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


<img style="float:left" src="image/ArtGalleryLogo.png"" alt="ArtGallery" >

<link rel="stylesheet" type="text/css" href="register.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="nav.css">


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
    <a href="viewgallery.php">Products</a>
	<a href="sidebyside2.php">View Gallery</a>
	
	<a href="log_in_form.php">Log In</a> 
	
	<a href="loghome.php"> <img src="image/profile.png" width="30" height="30" style="float:right"></a>
	<a href="viewbasket.php"> <img src="image/cart.png" width="30" height="30" style="float:right"></a>
	
  </div>
</div>
</body>
</html>




   <body style="background-color:#ECF0F1;">
 
   </body>


	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		

	</head>
	<body>
		<div class="register">
			<h1>Register</h1>
			<form action="reg.php" method="post" autocomplete="off">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				
				
				<input type="submit" value="Register">
			</form>
		</div>
	</body>
</html>