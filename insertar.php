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
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['nombre']) && isset($_GET['habitacion'])){
    $nombre=$_GET['nombre'];
    $dni=$_GET['dni'];
    $edad=$_GET['edad'];
    $seguridadsocial=$_GET['seguridad_social'];
    $habitacion=$_GET['habitacion'];
  
  
  $sql = "INSERT INTO datos (nombre, dni, edad, seguridad_social, habitacion)
  VALUES ('".$nombre."', '".$dni."', '".$edad."', '".$seguridadsocial."', '".$habitacion."');";
  $result = $conn->query($sql);
  
  echo "<h2>Los datos del usuario $nombre han sido insertados correctamente </h2>";
  
  
  
  echo '<a href="insertar.php">Añadir otro usuario</a>';
  echo '<a href="listado.php">Volver a Lista</a>';
  
  }
  
  else{
  
  ?>
  
  
  <form action="" method="get">
    <label for="nombre">Nombre del Usuario</label>
    <input type="text" id="nombre" name="nombre">
    <label for="dni">DNI</label>
    <input type="text" id="dni" name="dni">
    <label for="edad">Edad</label>
    <input type="number" id="edad" name="edad">
    <label for="seguridadsocial">SS</label>
    <input type="text" id="seguridadsocial" name="seguridad_social">
    <label for="habitacion">Nº Habitación</label>
    <input type="number" id="habitacion" name="habitacion">
  
  <input type="submit" value="Guardar Usuario">
  
  </form>
  
  
  <? } ?>
  
  <?php include 'includes/_footer.php';?>