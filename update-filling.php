
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
if($result == TRUE){
     while($row = $result->fetch_assoc()) {

  $datanames .= '<div id="updateform"  >
          <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="name" class="form-control" id="update_name" value="'. $row["name"].'" name="name">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="phone" class="form-control" id="update_phone" value="'. $row["phone"].'" name="phone">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="update_email" value="'. $row["email"].'" name="email">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Adress:</label>
            <input type="address" class="form-control" id="update_address" value="'. $row["address"].'" name="address">
          </div>
        <button id="update-save-btn"  updateid="'. $row["id"].'" class="btn btn-primary">save</button>


        </div>';
    
}

}
else {
    echo "Error" .datanames. "<br>error" .$conn->error;
}

echo $datanames;

$conn->close();

?>