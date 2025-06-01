<?php
$host = "localhost"; // Change if using Railway
$username = "root";  // Replace with Railway username
$password = "";      // Replace with Railway password
$dbname = "my_database"; // Replace with your DB name

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>