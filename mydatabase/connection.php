<?php
$servername = "";
$username = "root";
$password = "root";
$dbname = "mydatabase";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
