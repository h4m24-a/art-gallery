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
  if($_SERVER["REQUEST_METHOD"] == "POST") {
     // username and password sent from form 
     
     $myusername = mysqli_real_escape_string($conn,$_POST['username']);
     $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
     
     $sql = "SELECT * FROM users WHERE username = '$myusername' and passcode = '$mypassword'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $active = $row['active'];
     
     $count = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        //session_register("myusername");
		$_SESSION["admin"] = $row['admin_level'];
		$_SESSION["user"] = $myusername;
		
		
        
       echo  header("Location: index.html");
    exit;

	  
}
    else {
        echo  header("Location: log_in_form.php");
    exit;

     }
  }
?>