<?php
$servername = "localhost";
$username = "root";
$password = "";
$form = "contact_data";


// datas
           $name=$_REQUEST['name'];
           $phone=$_REQUEST['phone'];
           $email=$_REQUEST['email'];
           $address=$_REQUEST['address'];
           
// sql to create table
$sql = "INSERT INTO contacts (name,phone,email,address) VALUES('".$name."','".$phone."','".$email."','".$address."')";           



// Create connection
$conn = new mysqli($servername, $username, $password, $form);

$data = '<p> '.$name.'  </p>  <p>  '.$phone.'  </p>   <p>  '.$email.'  </p>   <p>  '.$address.'  </p>';
// Create database

if ($conn->query($sql) === TRUE) {
  echo $data;
} 


$conn->close();


?>