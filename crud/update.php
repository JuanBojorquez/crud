<?php
include("./inc/settings.php");
validar();
?>
<?php


$query="SELECT column1, column2, column3, column4, column5 FROM table1 WHERE column1 = ".$_GET['colum1'].";";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
