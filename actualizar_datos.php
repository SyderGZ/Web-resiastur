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
if ($_SESSION["rol"]<2) {
  header("Location: sesion/noacceso.php");
  exit();
}
?>

<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $basedatos);
// Check connection




if(isset($_GET['id']) &&isset($_GET['nombre']) && isset($_GET['dni']) && isset($_GET['edad']) && isset($_GET['seguridad_social']) && isset($_GET['habitacion'])){
    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $dni=$_GET['dni'];
    $edad=$_GET['edad'];
    $seguridadsocial=$_GET['seguridad_social'];
    $habitacion=$_GET['habitacion'];


$sql = "UPDATE `datos` SET
`nombre` = '".$nombre."',
`dni` = '".$dni."',
`edad` = '".$edad."',
`seguridad_social` = '".$seguridadsocial."',
`habitacion` = '".$habitacion."'
WHERE `id` = '".$id."';";

$result = $conn->query($sql);

echo "<h2>Los datos del Usuario $nombre se han actualizado correctamente en la base de datos</h2>";




echo '<a href="listado.php">Volver a Lista de Usuarios</a>';

}

else{

  echo "Error, vuelta al panel editar, actulice e inténtelo de nuevo";
}


?>


<?php include 'includes/_footer.php';?>