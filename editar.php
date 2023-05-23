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

if(isset($_GET['id'])){
    $id=$_GET['id'];
}

$sql = "SELECT * FROM datos WHERE id =$id";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>

<form action="actualizar_datos.php" method="get">

    <input type="hidden" name="id" value="<? echo $row['id']?>">

    <label for="nombre">Nombre del Usuario</label>
    <input type="text" id="nombre" name="nombre" value="<? echo $row['nombre']?>">

    <label for="dni">DNI</label>
    <input type="text" id="dni" name="dni" value="<? echo $row['dni']?>">

    <label for="edad">Edad</label>
    <input type="number" id="edad" name="edad" value="<? echo $row['edad']?>">

    <label for="seguridadsocial">SS</label>
    <input type="text" id="seguridadsocial" name="seguridad_social" value="<? echo $row['seguridad_social']?>">

    <label for="habitacion">Nº Habitación</label>
    <input type="number" id="habitacion" name="habitacion" value="<? echo $row['habitacion']?>">


<input type="submit" value="Guardar Usuario">

</form>


<?
  }
} else {
  echo "0 usuarios encontrados";
}


?>






<?php 

include 'includes/_footer.php';?>