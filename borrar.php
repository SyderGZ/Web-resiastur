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

<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $basedatos);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_GET['id'])){
  $id=$_GET['id'];

$sql = "DELETE FROM datos WHERE id =$id";
$result = $conn->query($sql);

echo "<p>El Usuario se ha borrado correctamente</p>";


} // primer if

else{
  echo '<p>No hemos encontrado el Usuario que quieres borrar <a href="listado.php">volver a Lista de Usuarios haciendo click aquí</a></p>';
}


echo '<a href="insertar.php">Añadir Usuario</a>';
echo '<a href="listado.php">Volver a la lista de Usuarios</a>';
?>
<?php include 'includes/_footer.php';?>