<?php include '../includes/config.php';    ?>
<?php include '../includes/_header.php';    ?>


<h1>Inicio de sesión</h1>
    
<form action="controlador-login.php" method="post">
    <div class="iniciarsesion">
    <i class="fa-solid fa-user"></i>
        <input name="username" type="text" placeholder="Escribe tu nombre de usuario">
    </div>
                <br><br>
    <div class="iniciarsesion">
    <i class="fa-solid fa-lock"></i>
        <input name="password" type="password" placeholder="Contraseña" >
    </div>
                <br><br>
        <input id="submit" type="submit" value="Iniciar sesión" name="btniniciar">
        <button><a href="http://resiastur.local/registrar.php">Registrarse</a></button>
        </form>
   

        
    <a href="../index.php">Volver al inicio</a>

    <?php include '../includes/_footer.php';    ?>
