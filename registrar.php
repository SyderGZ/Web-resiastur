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

if(isset($_GET['nombre']) && isset($_GET['password']) && isset($_GET['nickname'])){
    $nombre=$_GET['nombre'];
    $password=$_GET['password'];
    $nickname=$_GET['nickname'];
 
  
  
  $sql = "INSERT INTO usuarios (nombre, password, nickname)
  VALUES ('".$nombre."', '".$password."', '".$nickname."');";
  $result = $conn->query($sql);
  
  echo "<h2>Te has registrado correctamente </h2>";
  
  
  
  echo '<a href="../sesion/iniciarsesion.php">Iniciar Sesión</a>';
  
  }
  
  else{
  
  ?>
  
  
  <form action="" method="get">
    <label for="nickname">Nombre y apellido</label>
    <input type="text" id="nickname" name="nickname">
    <label for="nombre">Usuario:</label>
    <input type="text" id="nombre" name="nombre">
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password">

  <input type="submit" value="Guardar Usuario">
  
  </form>
  
  
  <? } ?>
  
  <?php include 'includes/_footer.php';?>