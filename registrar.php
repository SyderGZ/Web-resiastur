<?php include 'includes/config.php';?>
<?php include 'includes/_header.php';?>


<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

?>

<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $basedatos);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['nombre']) && isset($_GET['password'])){
    $nombre=$_GET['nombre'];
    $password=$_GET['password'];
 
  
  
  $sql = "INSERT INTO usuarios (nombre, password)
  VALUES ('".$nombre."', '".$password."');";
  $result = $conn->query($sql);
  
  echo "<h2>Te has registrado correctamente </h2>";
  
  
  
  echo '<a href="../sesion/iniciarsesion.php">Iniciar Sesión</a>';
  
  }
  
  else{
  
  ?>
  
  
  <form action="" method="get">
    <label for="nombre">Nombre del Usuario:</label>
    <input type="text" id="nombre" name="nombre">
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password">

  <input type="submit" value="Guardar Usuario">
  
  </form>
  
  
  <? } ?>
  
  <?php include 'includes/_footer.php';?>