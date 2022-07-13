<?php
$servername = "localhost";
$username = "csuclcom_sdb9";
$password = "pass_385!";
$dbname = "csuclcom_sdb9";
  session_start();
  $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


// Escape user inputs for security
$myusername = mysqli_real_escape_string($conn,$_POST['username']);
$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
 
// Attempt insert query execution
$sql = "INSERT INTO users (username, passcode) VALUES ('$myusername', '$mypassword')";
if(mysqli_query($conn, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>