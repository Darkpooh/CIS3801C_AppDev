<?php
        
        include "module3_opendb.php";
       
        
        $sql= "Select AddressLine1, City, PostalCode from address LIMIT 10";
        $result = mysqli_query($conn, $sql);
        
        if (mysql_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "AddressLine1: " . $row["AddressLine1"]. "<br>";
                echo "City: " . $row["City"]. "<br>";
                echo "PostalCode: " . $row["PostalCode"]. "<br><hr>";
            }
        } else {
            echo "0 results";
        }
        
        mysqli_close($conn);
        
?> 