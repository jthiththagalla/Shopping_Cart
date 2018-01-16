<?php

$conn = mysqli_connect("localhost", "root", "", "Shopping_Cart");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*echo "Connected successfully";*/
?>