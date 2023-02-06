<?php
$servername = "localhost";
$username = "root";
$password = "";
$form = "contact_data";
// Create connection
$conn = new mysqli($servername, $username, $password, $form);

$search = $_REQUEST['search'];

$card = ('%'.$search. '%');
$data = "SELECT name, id FROM contacts WHERE name LIKE '".$card."' ORDER BY name";
$result = $conn->query($data);
$datas = '';

if(!empty($result) && $result->num_rows >0){
 while($row = $result->fetch_assoc()) {
   $datas .= '<p class="display_name" u_id="'. $row["id"]. '" > '. $row["name"]. '</p>';
}
} 
else {
  echo "0 results";
}
echo $datas;
$conn->close();

?>