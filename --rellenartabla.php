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
if ($_SESSION["rol"]!=0) {
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

// Crear Tabla
$sql = "INSERT INTO `datos` (`nombre`, `dni`, `edad`, `seguridad_social`, `habitacion`)
VALUES
('Lucia Fernanda','36748756Z','99','928394857283','102');";

if ($conn->query($sql) === TRUE){
  echo "Se ha creado ";
} else {
  echo "Error: " . $conn->error;
}

// cierre de conexión
$conn->close();



?>

<a href="--install.php">Volver a Instalador</a>























<?php include 'includes/_footer.php';?>