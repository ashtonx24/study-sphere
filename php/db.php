<?php
// Database connection settings
$dbHost = "localhost";
$dbUser = "anon_ashton";
$dbPass = '$tudy_$ph3r3'; // Default password is blank in XAMPP
$dbName = "study_sphere";

// Create a connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
