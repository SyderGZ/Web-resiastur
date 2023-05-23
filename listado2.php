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

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

echo "<table>";
echo "<tr class='trhead'>";
echo "<th>Nombre</th><th>Password</th><th>Rol</th><th>Editar</th><th>Borrar</th>";
echo "</tr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>". $row["nombre"]. "</td>";
    echo "<td>". $row["password"]. "</td>";
    echo "<td>". $row["rol"]. "</td>";
    echo '<td><a href="editar2.php?id='.$row["id"].'">Editar</a></td>';
    echo '<td><a href="borrar2.php?id='.$row["id"].'">borrar</a></td>';
    echo "</tr>";

  }
} else {
  echo "No hay ningún huésped en la residencia actualmente";
}
$conn->close();


echo "</table>";

?>


<?php include 'includes/_footer.php';    ?>