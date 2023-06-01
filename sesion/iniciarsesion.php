<?php include '../includes/config.php';    ?>
<?php include '../includes/_header.php';    ?>

    <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form action="<? echo $miURL?>sesion/controlador-login.php" method="post" class="login">


				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input name="username" type="text" class="login__input" placeholder="Nombre de Usuario">
				</div>


				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input name="password" type="password" class="login__input" placeholder="Contraseña">
				</div>
				

                <div class="button login__submit">
                <input id="submit" type="submit" value="Iniciar sesión" name="btniniciar">
					<i class="button__icon fas fa-chevron-right"></i>
                </div>
				
				<button class="button login__submit">
                    <a href="http://resiastur.local/registrar.php" class="button__text">Registrarse</a>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
        
    <a href="../index.php">Volver al inicio</a>

    <?php include '../includes/_footer.php';    ?>
