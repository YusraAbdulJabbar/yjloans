<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "yjl";
$conn = new mysqli("localhost", "root", "", "yjl", 3308);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>