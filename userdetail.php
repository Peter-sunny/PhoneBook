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

$result = $conn->query($dataname);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

  $datanames .= '
<input id="id_input" type="text" name=""value="'. $row["id"].'">
  <p > '. $row["name"].' </p> <p>  '. $row["phone"]. ' </p><p>  '. $row["email"]. ' </p><p>  '. $row["address"]. ' </p>';

  }
} else {
  echo "0 results";
}
echo $datanames;

?>