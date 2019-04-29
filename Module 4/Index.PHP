<!DOCTYPE html>
<html>
   
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="custom.css"
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
</head>
<body>
<?php
        
        include "module3_opendb.php";
       
        
        $sql= "Select AddressLine1, City, PostalCode from adventureworks LIMIT 10";
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

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Rick and Morty R Us</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="Index.html">Home</a></li>
        <li><a href="Episodes.html">Episodes</a></li>
        <li><a href="Merchandise.html">Merchandise</a></li>
        <li><a href="ContactUs.html">Contact Us</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
  <h3>Hello World!</h3>
  <p>Good Day</p>

  <div class="HomeVideo"><iframe width="560" height="315" src="https://www.youtube.com/embed/qUYvIAP3qQk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

  <p> <img src= "RickandMorty3.jpg" width="300" height="315"
    alt = "Rick and Morty" /> 
    <img src="RickandMorty1.png" width="300" height="315">
    <img src="RickandMorty2.jpg" width="300" height="315"></p>

</body>
</html>
