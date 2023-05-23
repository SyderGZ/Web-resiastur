<?php include 'includes/config.php';    ?>
<?php include 'includes/_header.php';    ?>


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



<?php

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $basedatos";
if ($conn->query($sql) === TRUE) {
  echo "La base de datos esta creada";
} else {
  echo "Error en la creación de la base de datos: " . $conn->error;
}

// cierre de conexión
$conn->close();



?>

<p> Se acaba de crear la base de datos: ResiAstur</p>

<a href="--install.php">Volver a Instalador</a>

<?php include 'includes/_footer.php';    ?>