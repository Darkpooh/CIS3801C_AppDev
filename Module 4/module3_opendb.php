

<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "darktea";
 $dbpass = "Darkpooh!234";
 $db = "adventureworks";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>