            <?php
            require('con-mysql.php');

            $dataname = "SELECT id,name,phone  FROM contacts";
            $result = $conn->query($dataname);
            $datas = '';



                        // entered data printing

            if ($result->num_rows > 0) {
                        // output data of each row
              while($row = $result->fetch_assoc()) {

                $datas .= '<p  class="display_name" u_id="'. $row["id"]. '" > '. $row["name"]. '</p>';

              }
            } else {
              echo "0 results";
            }
            echo $datas;
            ?>