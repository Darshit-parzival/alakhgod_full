<?php
session_start();

// Database connection variables
$host = "localhost";  // Change this if your database is hosted remotely
$username = "root";    // MySQL username (default is 'root' for XAMPP)
$password = "";        // MySQL password (default is empty for XAMPP)
$database = "alakhgod"; // Database name

// Create connection
$con = new mysqli($host, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
?>
