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

    $sql = "SELECT * FROM datos WHERE id =$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
      
          echo "<h1>". $row["nombre"]. "</h1>";
          echo "<p>". $row["dni"]. "</p>";
          echo "<p>". $row["edad"]. "</p>";
          echo "<p>". $row["seguridad_social"]. "</p>";
          echo "<p>". $row["habitacion"]. "</p>";
      
          echo '<a href="listado.php">Volver a la Lista de Usuarios</a> ';
          echo '<a href="editar.php?id='.$row["id"].'">Editar información</a> ';
          echo '<a href="borrar.php?id='.$row["id"].'">Borrar datos del usuario</a> ';
        }
      } else {
        echo '<p>El Usuario solicitado se ha borrado o no existe. Puede <a href="listado.php">volver a Lista de Usuarios haciendo click aquí</a></p>';
      }
      
      
      } // primer if
      
      else{
        echo '<p>El Usuario solicitado se ha borrado o no existe. Puede <a href="index.php">volver a Lista de Usuarios haciendo click aquí</a></p>';
      }
      
      
      echo '<a href="insertar.php">Añadir Usuario</a>';
      ?>




      <?php include 'includes/_footer.php';?>
