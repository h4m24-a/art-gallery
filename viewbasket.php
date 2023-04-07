<?php
session_start();
include 'db_login.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ID = $_SESSION['last_id'];
$sql = "SELECT * FROM Basketline WHERE basketNo = $ID";
$result = mysqli_query($conn,$sql);
$products = array();

while($row = mysqli_fetch_array($result))
{
	$products[] = $row;
}
mysqli_close($conn);
//$orderTotal=0;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="image_test_styles.css">
    <title>Shopping Cart</title>
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


<h2>Shopping Basket</h2>

<table border=1>
<tr><th>Item No</th><th>Description</th><th>Price</th><th>Quantity</th><th>linetotal</th><tr>
<?php foreach($products as $product):?>
<tr>
    <td>
    <?php echo $product["ItemNo"];?>
    </td>
    <td>
    <?php echo $product["Description"];?>
    </td>
    <td>
	<?php echo $product ["Price"];?>	
     </td>
	 <td>
	<?php echo $product["quantity"];?>	
     </td>
	 <td>
	<?php echo $product["lineTotal"];?>	
	<?php $orderTotal=$orderTotal + $product["Price"];?>
     </td>
	<td>
        <form method="post" action="removeFromBasket.php">
            <input type="hidden" name="BLine_id" value="<?php echo $product["id"];?>"/>
			
            <input type="submit" name = "submit" value = "Remove"/>
        </form>
    </td>
</tr>
<?php endforeach;?>
</table>
<br>

<form method="post" action="products.php">
	<input type="submit" name = "submit" value="Continue Shopping"/>
</form>
<br><br>
<form method="post" action="checkout.php">
</table>
<br>
<?php echo "Total Cost : £ $orderTotal";?> <br>
<input type="submit" name = "submit" value="Checkout"/>
</form>
<?php
?>

																 
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

</body>
</html>
