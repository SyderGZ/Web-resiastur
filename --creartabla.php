<?php include 'includes/config.php';?>
<?php include 'includes/_header.php';?>


<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (empty($_SESSION["usuario"])) {
  header("Location: sesion/noacceso.php");
  exit();
}
if ($_SESSION["rol"]!=3) {
  header("Location: sesion/noacceso.php");
  exit();
}
?>


<? 

// Create connection
$conn = new mysqli($servername, $username, $password, $basedatos);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS `datos` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nombre` varchar(255) NOT NULL,
    `dni` varchar(12) NOT NULL,
    `edad` int NOT NULL,
    `seguridad_social` varchar(100) NOT NULL,
    `habitacion` int NOT NULL
    

  );";

  if ($conn->query($sql) === TRUE){
    echo "Se ha creado ";
  } else {
    echo "Error: " . $conn->error;
  }
  
  // cierre de conexión
  $conn->close();
  
  
  
  ?>
  
  <p> Se acaba de crear la tabla</p>
  
  <a href="--install.php">Volver a Instalador</a>


  <?php include 'includes/_footer.php';?>