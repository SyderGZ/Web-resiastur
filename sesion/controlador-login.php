<?php include '../includes/config.php';    ?>
<?php include '../includes/_header.php';    ?>


<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

$conexion=new mysqli($servername, $username, $password, $basedatos);

//if(!empty($_POST["btniniciar"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sql=$conexion->query("SELECT * FROM usuarios WHERE nombre='$username' AND password='$password'");

        if($datos=$sql->fetch_object()){
            //$_SESSION["id"]=$datos->id;
            $_SESSION["usuario"]=$datos->nombre;
            $_SESSION["rol"]=$datos->rol;
            $_SESSION["nick"]=$datos->nickname;
            //$_SESSION["password"]=$datos->password;
            header ("location:http://resiastur.local/");
        }else{
            echo "<p class='denegado'>Acceso denegado</p>";
        }

    }else{
            echo "<p>Campos vacíos</p>";
    }

//}


?>

<?php include '../includes/_footer.php';    ?>
