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

$sql = "SELECT * FROM datos";
$result = $conn->query($sql);

echo "<table>";
echo "<tr class='trhead'>";
echo "<th>Nombre</th><th>Habitación</th><th>Ficha</th>";
if($rol_usuario==3){
  echo "<th>Editar</th><th>Borrar</th>";
}
echo "</tr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>". $row["nombre"]. "</td>";
    echo "<td>". $row["habitacion"]. "</td>";
    echo '<td><a href="ficha/'.$row["id"].'">Ver</a></td>';
    if($rol_usuario==3){
    echo '<td><a href="editar-ficha/'.$row["id"].'">Editar</a></td>';
    echo '<td><a href="borrar.php?id='.$row["id"].'">borrar</a></td>';
    }
    echo "</tr>";

  }
} else {
  echo "No hay ningún huésped en la residencia actualmente";
}
$conn->close();


echo "</table>";
echo '<a href="insertar.php">Añadir Usuario</a>';
?>


<?php include 'includes/_footer.php';    ?>