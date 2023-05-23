<?php include 'includes/config.php';    ?>
<?php include 'includes/_header.php';    ?>
<script>
var angle = 0;
function galleryspin(sign) { 
spinner = document.querySelector("#spinner");
if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
}
</script>


<div class="divportada">
    <img src="img/residencia.jpg" alt="foto de la residencia" class="fotoportada">
</div>

<div class="menudesplegable">
    <a class="desplegable a" href="#nosotros">Nosotros</a>
    <a class="desplegable b" href="#carouseltitulo">Instalaciones</a>
    <a class="desplegable c" href="#contacto">Contacto</a>
</div>

<div id="nosotros">
    <h2>Nosotros</h2>
    <div class="nosotros2">
        <img src="img/nosotros2.jpg" alt="">
        <div>
            <h3>Nuestra visión</h3>
            <p>Nuestros centros quieren ser lugares mejores que el propio hogar de cada uno de nuestros residentes. Esta es la visión de Colisée España: las personas de las que cuidamos deben sentirse en casa pero, además, contar con la seguridad de estar acompañados por la familia de profesionales encargada de su atención las 24 horas del día. Este objetivo va de la mano con la finalidad de ser reconocidos socialmente como una compañía de referencia en el sector de la atención sociosanitaria y de los servicios residenciales.</p>
        </div>
    </div>
    <div class="nosotros3">
        <div>
            <h3>Nuestra misión</h3>
            <p>Nuestra misión reside en ayudar a las personas cuyo cuidado depende de nosotros a envejecer de una forma positiva. Para ello, fomentamos la autonomía de nuestros residentes, asistiéndolos en todas aquellas necesidades, tanto físicas como emocionales, que no puedan satisfacer por sí mismos. Cuidamos y acompañamos, tanto a las personas que conviven con nosotros como a sus familias.</p>
        </div>
        <img src="img/nosotros3.jpg" alt="">
    </div>
    <h4>"Juntos cuidando a las personas"</h4>
    <p>Autor: Philippe Barkley </p>
</div>

<h2 id="carouseltitulo">Nuestras Instalaciones</h2>

    <div id="carousel">
  <figure id="spinner">
    <img src="img/piscina.jpg" alt>
    <img src="img/piscina.jpg" alt>
    <img src="img/piscina.jpg" alt>
    <img src="img/piscina.jpg" alt>
    <img src="img/piscina.jpg" alt>
    <img src="img/piscina.jpg" alt>
    <img src="img/piscina.jpg" alt>
    <img src="img/piscina.jpg" alt>
</figure>
</div>
<div class="carouselbtn">
<button style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</button>
<button style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</button>
</div>


<!-- /* Aquí empieza el formulario de contacto */ -->





<div id="contacto">
  <h1>&bull; CONTACTO &bull;</h1>
  <div class="underline">
  </div>
   
  <form action="#" method="post" id="contact_form">
    
    
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Escribe aquí tu nombre" name="name" id="name_input" required>
    </div>
    
    <div class="telephone">
      <label for="name"></label>
      <input type="text" placeholder="Escribe aquí tu teléfono" name="telephone" id="telephone_input" required>
    </div>
    
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="Escribe aquí tu email" name="email" id="email_input" required>
    </div>
    
    
    
    
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="Escribe aquí tu consulta" id="message_input" cols="30" rows="5" required></textarea>
    </div>
    
    
    
    <div class="submit">
      <input type="submit" value="Enviar" id="form_button" />
    </div>
    
    
    
  </form><!-- // End form -->
</div><!-- // End #container -->



<?php include 'includes/_footer.php';    ?>
