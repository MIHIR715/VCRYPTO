<?php
$servername = "127.0.0.1:80"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "EVILS15";
$dbname = "vcrypto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include_once 'register.php'; // Include the registration logic here
include_once 'login.php'; // Include the registration logic here

?>