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

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para borrar la base de datos "resiastur" y todo su contenido
$sql = "DROP DATABASE IF EXISTS resiastur";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
  echo "<div class='alert'>Base de datos 'resiastur' eliminada correctamente</div>";
} else {
  echo "Error al eliminar la base de datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>

<a href="--install.php">Ir a Instalar</a>
<p>para volver a instalar con los valores iniciales.</p>




<?php include 'includes/_footer.php';    ?>