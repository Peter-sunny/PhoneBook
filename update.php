<?php
$servername = "localhost";
$username = "root";
$password = "";
$form = "contact_data";


// datas   
           $id=$_REQUEST['updateid'];
           $name=$_REQUEST['name'];
           $phone=$_REQUEST['phone'];
           $email=$_REQUEST['email'];
           $address=$_REQUEST['address'];
           
// sql to create table
$sql = "UPDATE `contacts` SET `name` = '".$name."', `phone` = '".$phone."', `email` = '".$email."', `address` = '".$address."' WHERE (`id` = '".$id."')";          



// Create connection
$conn = new mysqli($servername, $username, $password, $form);


// Create database

if ($conn->query($sql) === TRUE) {
  echo "succes";
} 

$conn->close();

?>