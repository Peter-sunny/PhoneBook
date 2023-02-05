            <?php
            require('con-mysql.php');

            $dataname = "SELECT id,name,phone  FROM contacts";
            $result = $conn->query($dataname);
           
            }
            echo $datas;
            ?>