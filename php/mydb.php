<?php
// Database configuration
$host = "192.168.30.%";  // or the IP address of your server
$username = "scott";  // your database username
$password = "s123456";  // your database password
$database = "phone_shop";  // your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
