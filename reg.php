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
