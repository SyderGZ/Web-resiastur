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
if ($_SESSION["rol"]!=0) {
  header("Location: sesion/noacceso.php");
  exit();
}
?>
<ol>
  <h3>Base de Datos</h3>  
  <li><a href="--creardb.php">Crear Base de Datos "Resiastur"</a></li>
  
  <h3>Tabla</h3>
  <li><a href="--creartabla.php">Crear Tabla</a></li>
  <li><a href="--creartablausuarios.php">Crear Tabla de Usuarios</a></li>

  <li><a href="--rellenartabla.php">Introducir datos en la tabla de datos</a></li>
  <li><a href="--rellenartablausuarios.php">Introducir datos en la tabla de usuarios</a></li>
  
  
  
  <!-- <h3>Config</h3>
  <li><a href="--tablaConfig.php">Crear Tabla Config</a></li>
  <li><p>Rellena los datos de la tabla Config a mano</li> -->

    <h3>Borrar base de datos</h3>
  <li><a href="--borrar.php">Borrar Base de Datos</a></li>
</ol>

<a href="index.php">Volver a Inicio</a>
<a href="sesion/cerrarsesion.php">Cerrar Sesión</a>

<?php include 'includes/_footer.php';?>