<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Coop-finder";

//create connection
$conn = mysqli_connect($servername, $username, $password ,  $dbname);

//check conncetion
if(! $conn )
 {
  die('Could not connect: ' . mysql_error());
 }

?>