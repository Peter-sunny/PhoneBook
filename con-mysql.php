<?php 
	
// mysql

$servername = "localhost";
$username = "root";
$password = "";
$form = "contact_data";

	         

// Create connection
$conn = new mysqli($servername, $username, $password, $form);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>