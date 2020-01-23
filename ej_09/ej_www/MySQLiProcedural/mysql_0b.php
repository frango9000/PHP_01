<?php
$servername = "localhost";
$username = "narf";
$password = "narf";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

mysqli_close($conn);
?>