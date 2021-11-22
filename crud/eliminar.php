<?php
include("./inc/settings.php");
validar();
?>
<?php

$id=$_GET['colum1'];

$query="DELETE FROM table1 WHERE column1=$id;";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




?>
