
<?php
$servername = "localhost";
$username = "root";
$password = "";
$form = "contact_data";







// Create connection
$conn = new mysqli($servername, $username, $password, $form);

$user_id = $_REQUEST['id'];


$sql = "DELETE FROM contacts WHERE id = '".$user_id."' ";
$result = $conn->query($sql);
if($result == TRUE){
    echo "deleted successfully";
}
else {
    echo "Error" .sql. "<br>error" .$conn->error;
}

$conn->close();

?>