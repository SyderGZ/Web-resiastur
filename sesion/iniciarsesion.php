<?php include '../includes/config.php';    ?>
<?php include '../includes/_header.php';    ?>


        <h1>Inicio de sesión</h1>
    
        <form action="controlador-login.php" method="post">

            <input name="username" type="text" placeholder="Escribe tu nombre de usuario">
                <br><br>
            <input name="password" type="password" placeholder="Contraseña" >
                <br><br>
            <input id="submit" type="submit" value="Iniciar sesión" name="btniniciar">
        </form>
   

        
    <a href="../index.php">Volver al inicio</a>

    <?php include '../includes/_footer.php';    ?>
