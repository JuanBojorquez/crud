<?php 
include("./inc/settings.php");
validar();
?>
<?php 
    $query = "UPDATE table1 SET column2 = '".$_POST['nombre']."', column3 = '".$_POST['fecha']."', column4 = ".$_POST['numero'].", column5 = ".$_POST['numdouble']." WHERE column1 = ".$_POST['identificador'].";";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
