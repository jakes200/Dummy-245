<?php
// Database configuration
$host = "localhost";     // or 127.0.0.1
$user = "root"; // replace with your DB username
$password = ""; // replace with your DB password
$database = "aprilproperties"; // replace with your DB name

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: echo a success message
// echo "Connected successfully";
?>
