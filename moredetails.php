<?php
session_start();
include 'db_login.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$idNo = $_POST["idno"];
$sql = "SELECT * FROM testimages1 WHERE id = $idNo";
$result = mysqli_query($conn,$sql);
$pics = array();

while($row = mysqli_fetch_array($result))
{
	$pics[] = $row;
}
mysqli_close($conn);
foreach($pics as $pic):
?>


<head>

<title> Shopping Cart</title>
</head>


<img style="float:left" src="image/ArtGalleryLogo.png"" alt="ArtGallery" >
<link rel="stylesheet" type="text/css" href="style.css">

 <body style="background-color:#ECF0F1;">
 
   </body>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 20px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #ECF0F1;
  padding: 90px 20px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  font-family: Verdana;
  line-height: 9px;
  border-radius: 50px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
  
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
 
  <div class="header-right">
    <a class="active" href="index.html">Home</a>
    <a href="#about">Artists</a>
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
<title><?php echo $pic["title"]?></title>
</head>
<body>
<table>
<tr>
<td><img class="harry" src="image/<?php echo $pic["image_name"];?>" ></td>
<td><?php echo $pic["description"];?></td>
<td><?php echo $pic["price"];?></td>
<td>
<form method="post" action="addToBasket.php">
<input type="hidden" name="idno" value=<?php echo $pic["id"]?> >
 <input type="hidden" name="description" value=<?php echo $pic["description"]?> >
 <input type="hidden" name="price" value=<?php echo $pic["price"]?> >
	<input type="submit" value="Add To Basket">
	</form>
	</td>
</tr>
<?php endforeach;?>
</table>
</body>
</html>

