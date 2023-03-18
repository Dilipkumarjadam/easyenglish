<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";  //tere db a name
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>