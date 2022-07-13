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
$bid=$_POST["BLine_id"];
$sql = "DELETE FROM Basketline WHERE id= $bid";
mysqli_query($conn, $sql);
  
mysqli_close($conn);
header('location: viewbasket.php');
?>