<?php
$host = 'localhost';
$dbname = 'karnatism';
$username = 'root'; // Use your MySQL username
$password = '';     // Use your MySQL password

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
