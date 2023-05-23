<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
session_destroy();
unset($_SESSION['username']);


?>

<?php include '../includes/config.php';    ?>
<?php include '../includes/_header.php';    ?>



    <h1>Acabamos de cerrar sesión</h1>
    <a href="iniciarsesion.php">Haz click aquí para iniciar sesión</a>
    <a href="../index.php">Volver al inicio</a>


    <?php include '../includes/_footer.php';    ?>
</html>