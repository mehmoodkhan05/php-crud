<?php
$host = "localhost";
$name = "root";
$password = "";
$dbname = "php-crud";

// Create connection
$conn = mysqli_connect($host, $name, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}