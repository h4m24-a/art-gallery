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
// sql to create table 'tbl_topic'
$sql = "CREATE TABLE users (
username varchar(30) PRIMARY KEY, 
passcode VARCHAR(30) NOT NULL,
admin_level INT(11)
)";


if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO users (username, passcode, admin_level)
VALUES ('bob', 'password', 2)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO users (username, passcode, admin_level)
VALUES ('charlie', 'admin', 1)";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);

?>