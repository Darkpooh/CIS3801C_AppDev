<!DOCTYPE html>
<html>
<head>
  <title><Example></title>
</head>
<body>
<?php
        include 'config.php';
        include 'module3_opendb.php';
       
        
        $sql= "Select name, length, rating from episodes LIMIT 10";
        $result = mysqli_query($conn, $sql);
        
        if (mysql_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. "<br>";
                echo "length: " . $row["length"]. "<br>";
                echo "rating: " . $row["rating"]. "<br><hr>";
            }
        } else {
            echo "0 results";
        }
        
        mysqli_close($conn);
        
?>
</body>
</html> 