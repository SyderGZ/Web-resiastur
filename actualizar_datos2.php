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




if(isset($_GET['id']) &&isset($_GET['nombre']) && isset($_GET['password']) && isset($_GET['rol'])){
    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $password=$_GET['password'];
    $rol=$_GET['rol'];



    $sql = "UPDATE `usuarios` SET
    `nombre` = '".$nombre."',
    `password` = '".$password."',
    `rol` = '".$rol."'
    
    WHERE `id` = '".$id."';";

$result = $conn->query($sql);

echo "<h2>Los datos del Usuario $nombre se han actualizado correctamente en la base de datos</h2>";



echo '<a href="listado2.php">Volver a Lista de Usuarios</a>';

}

else{

  echo "Error, vuelta al panel editar, actulice e inténtelo de nuevo";
}


?>


<?php include 'includes/_footer.php';?>