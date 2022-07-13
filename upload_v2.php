<?php
include 'db_login.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$target_dir = "images/";  // specifies the directory where the file is going to be placed
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // specifies the path of the file to be uploaded
$target = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // holds the file extension of the file (in lower case)
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<h2>Sorry, file already exists.</h2>";
    $uploadOk = 0;
}
// Check file size (500000 = 500Kb)
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<br><h2>Sorry, your file is too large. The size is greater than 500KB</h2>";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<br><h2>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h2>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br><h2>Sorry, your file was not uploaded.</h2>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<h1>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</h1>";
		$sql = "INSERT INTO testImages(image_name) VALUES ('$target')";
		
		if(mysqli_query($conn,$sql))
		{
			echo "Successful";
		}
		else
		{
			echo "Error: ". $sql . "<br>" . mysqli_error($conn);
		}
	mysqli_close($conn);
    } else {
        echo "<br><h2>Sorry, there was an error uploading your file.</h2>";
    }
}








?>