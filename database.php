<?php
$servername = "localhost";
$username = "geoweek";
$password = "u0QLhGhe*";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>