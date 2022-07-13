<?php
include 'db_login.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM testimages1";
$result = mysqli_query($conn,$sql);
$pics = array();

while($row = mysqli_fetch_array($result))
{
	$pics[] = $row;
}
mysqli_close($conn);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="image_test_styles.css">

<img style="float:left" src="image/ArtGalleryLogo.png"" alt="ArtGallery" >


<link rel="stylesheet" type="text/css" href="style.css">
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




<title>Craft Valley Products</title>
</head>
<body>

<style>
h2{
font-family: Bahnschrift SemiBold;
color: blue;
font-size: 40px;
text-align:center;
}
</style>
<h2>Products</h2>



<div class="row">
<?php
$y=1;

foreach($pics as $pic):
if($y>3)
{
	echo "</div>";
	$y=1;
	echo "<div class=row>";
}
	
?><div class="column">
    
	<img class="harry" src="image/<?php echo $pic["image_name"]?>" >
	<br>
	<br>
	<form action="moredetails.php" method="post">
	<input type="hidden" name="idno" value=<?php echo $pic["id"]?>> 
	<input type="hidden" name="description" value=<?php echo $pic["description"]?> >
    <input type="hidden" name="price" value=<?php echo $pic["Price"]?> >
	<input type="submit" value="More Details">


	
</form>	</div>
 <?php 
	$y++;
endforeach;
?>
</div>
  
  
</body>
</html>



<footer>



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



