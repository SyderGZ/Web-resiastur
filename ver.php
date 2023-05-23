<?php include 'includes/config.php';?>
<?php include 'includes/_header.php';?>
<style>
  body {
  color: #2b2c48;
  font-family: "Jost", sans-serif;
  background-image: url(https://img.freepik.com/free-vector/clean-medical-patterned-background-vector_53876-161509.jpg?w=996&t=st=1684865885~exp=1684866485~hmac=3310ca34c3f72ca9c7645bd99e5f910e6e84a6f66f3b67d07046b43c677f7568);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  min-height: 100vh;

}
</style>

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
?>
<div class="card" data-state="#about">
  <div class="card-header">
    <div class="card-cover" style="background-image: url('https://pbs.twimg.com/profile_images/927109791142629376/5WuIAcuc_400x400.jpg')"></div>
    <img class="card-avatar" src="https://pbs.twimg.com/profile_images/927109791142629376/5WuIAcuc_400x400.jpg" alt="avatar" />
    <h1 class="card-fullname"><?php echo $row["nombre"] ?></h1>
    <h2 class="card-jobtitle">Nº Hab | <? echo $row["habitacion"] ?> |</h2>
  </div>
  <div class="card-main">
    <div class="card-section is-active" id="about">
      <div class="card-content">
        <div class="card-subtitle">DATOS PERSONALES</div>
        <ul>
          <li>
            <h4>Edad:</h4>
            <p><? echo $row["edad"] ?></p>
          </li>
          <li>
            <h4>DNI:</h4>
            <p><? echo $row["dni"] ?></p>
          </li>
          <li>
            <h4>NºSS:</h4>
            <p><? echo $row["seguridad_social"] ?></p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card-section" id="experience">
    <div class="card-content">
      <div class="card-subtitle">FICHA TÉCNICA</div>

    </div>
  </div>
  <div class="card-section" id="contact">
    <div class="card-content">
      <div class="card-subtitle">DATOS FAMILIARES</div>
      <div class="card-contact-wrapper">
        <div class="card-contact">
        </div>
        <div class="card-contact">
        </div>
        <div class="card-contact">
        </div>
      </div>
    </div>
  </div>
  <div class="card-buttons">
    <button data-section="#about" class="is-active">DATOS PERSONALES</button>
    <button data-section="#experience">FICHA TÉCNICA</button>
    <button data-section="#contact">DATOS FAMILIARES</button>
  </div>
</div>
</div>

<?
          // echo "<h1>". $row["nombre"]. "</h1>";
          // echo "<p>". $row["dni"]. "</p>";
          // echo "<p>". $row["edad"]. "</p>";
          // echo "<p>". $row["seguridad_social"]. "</p>";
          // echo "<p>". $row["habitacion"]. "</p>";
      

?>
<br>
<?
          
          echo '<a href="listado.php">Volver a la Lista de Usuarios</a> ';

          if($rol_usuario==3){
          echo '<a href="editar.php?id='.$row["id"].'">Editar información</a> ';
          echo '<a href="borrar.php?id='.$row["id"].'">Borrar datos del usuario</a> ';
          }
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

      <script>
  const buttons = document.querySelectorAll(".card-buttons button");
const sections = document.querySelectorAll(".card-section");
const card = document.querySelector(".card");

const handleButtonClick = e => {
  const targetSection = e.target.getAttribute("data-section");
  const section = document.querySelector(targetSection);
  targetSection !== "#about" ?
  card.classList.add("is-active") :
  card.classList.remove("is-active");
  card.setAttribute("data-state", targetSection);
  sections.forEach(s => s.classList.remove("is-active"));
  buttons.forEach(b => b.classList.remove("is-active"));
  e.target.classList.add("is-active");
  section.classList.add("is-active");
};

buttons.forEach(btn => {
  btn.addEventListener("click", handleButtonClick);
});
</script>