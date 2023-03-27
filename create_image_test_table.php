<?php

include 'db_login.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
<head>
<title>Create & Populate Table testImages</title>
</head>
 
<body>
    
<?php

// sql to create table
$sql = "CREATE TABLE testimages1 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
description VARCHAR(50),
image_name VARCHAR(50),
price DECIMAL(11,2)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table <b><i>testimages1</i></b> created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('cliff','cliff.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('cloud','cloud.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('galaxy','galaxy.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('ice','ice.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('river','river.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('cliff','cliff.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('rock','rock.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('sand','sand.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('seashore','seashore.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";

}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('smokey','smokey.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('tree','tree.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
$sql = "INSERT INTO testimages1(description,image_name,price) VALUES ('waves','waves.jpg',10.00);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
}
mysqli_close($conn);
?>
</body>
</html>
