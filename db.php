<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project-1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, "3307");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>