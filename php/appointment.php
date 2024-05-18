<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO appointments (date, time, name, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$date, $time, $name, $message]);
    
    echo "Appointment booked successfully!";
}
?>
