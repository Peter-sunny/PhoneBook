<?php
$servername = "localhost";
$username = "root";
$password = "";
$form = "contact_data";



           



// Create connection
$conn = new mysqli($servername, $username, $password, $form);

$user_id = $_REQUEST['id'];

$dataname = "SELECT *  FROM contacts WHERE id = '".$user_id."' ";
$datanames = "";


} else {
  echo "0 results";
}
echo $datanames;

?>