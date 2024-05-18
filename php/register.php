<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $email, $password]);
    
    echo "Registration successful!";
}
?>
