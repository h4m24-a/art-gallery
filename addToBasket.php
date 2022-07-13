<?php 
session_start();
include 'db_login.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!isset($_SESSION["Basket"]))
{
	$sql = "INSERT INTO Basket(total) VALUES (0.00)";
	$_SESSION["Basket"]=true;
	if(mysqli_query($conn,$sql))
	{
		$_SESSION["last_id"]=mysqli_insert_id($conn);
	}
}
	$iid=$_POST["idno"];
	$desc=$_POST["description"];
	$p=$_POST["price"];
	$lid=$_SESSION["last_id"];
	$sql="INSERT INTO Basketline (BasketNo,ItemNo,Description,Price) VALUES ($lid,$iid,'$desc','$p')";
	if(mysqli_query($conn,$sql))
	{
		header('location: viewbasket.php');
	}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	
	
	mysqli_close($conn);
	
	
?>