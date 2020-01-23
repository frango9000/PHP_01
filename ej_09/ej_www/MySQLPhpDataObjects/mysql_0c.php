<?php
$servername = "localhost";
$username = "narf";
$password = "narf";

try {
    $conn = new PDO("mysql:host=$servername;dbname=narf", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>