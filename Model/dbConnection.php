<?php

$conn = mysqli_connect("localhost:3333", "root", "", "Shopping_Cart");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>