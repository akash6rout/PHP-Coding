<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "firstdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Close connection
mysqli_close($conn);


//AI generated code is successfully running
?>
