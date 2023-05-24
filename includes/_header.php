<?php
// si la sesión no se ha iniciado antes: iniciar sesión
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION["usuario"])) {
    $sesion = 0;
}
else{
    $sesion = 1;
    $nom_usuario= $_SESSION["usuario"];
    $rol_usuario= $_SESSION["rol"];
    $nom_nickname= $_SESSION["nick"];
}






?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResiAstur - Residencia de Ancianos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="http://resiastur.local/css/style.css">
</head>

<header class="header">
        <div class="logo">
            <img src="http://resiastur.local/img/logo.png" alt="ResiAstur Logo">
            <h1>ResiAstur</h1>
            <?php if($sesion){?>
        <div class="saludo">
        <i class="fa-solid fa-user"></i>
            <p> <?php echo $nom_nickname; 


            // if($rol_usuario==3){
            //     echo "eres admin";
            // }
            // else{
            //     echo "eres empleado";
            // }


            ?>
            </p>
        </div>
        <?php } ?>
        </div>
        
        <nav class="navigation">
            <ul>
                <li><a href="http://resiastur.local/index.php">Inicio</a></li>
                <?php if($sesion){?>
                <?php  if($rol_usuario==3){ ?>
                     <li><a href="http://resiastur.local/--install.php">Instalador</a></li>
                     <li><a href="http://resiastur.local/listado2.php">Administrador</a></li>
                     <li><a href="http://resiastur.local/listado.php">Tablas</a></li>
                <?php } 
                else if($rol_usuario>=2){ ?>
                     <li><a href="http://resiastur.local/listado.php">Tablas</a></li>
                <?php }
                }?>
                <li>
                    
                <?php if($sesion){?>
                    <a href="http://resiastur.local/sesion/cerrarsesion.php">Cerrar Sesión</a></li>
                <? } else{ ?>
                    <a href="http://resiastur.local/sesion/iniciarsesion.php">Iniciar Sesión</a></li>
                <? } ?>
            
            
            
            </li>
            </ul>
        </nav>
    </header>
<main>
