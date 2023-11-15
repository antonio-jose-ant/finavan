<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
	

	<link rel="stylesheet" href="../assets/css/master.css"> 
	<link rel="icon" href="img/finavana.png">
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION['user'])) {
		include "../includes/header.php";
	}
?>
	<main>
		<div class="title">
			<h1>Registrate</h1>
			<!-- <img clas="img" src="LogoV.png" alt=""> -->
		</div>


		<form action="./regis.php" class="formoRegistro" method="post" id="formulario">

			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Usuario</label> 
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Lobuki" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Brenda" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>		

				<!-- Grupo: Apellido Paterno -->
			<div class="formulario__grupo" id="grupo__apellidop">
				<label for="apellidop" class="formulario__label">Apellido Paterno: </label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellidop" id="apellidop" placeholder="Navarrete" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div> 

				<!-- Grupo: Apellido Materno -->
				<div class="formulario__grupo" id="grupo__apellidom">
				<label for="apellidom" class="formulario__label">Apellido Materno: </label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellidom" id="apellidom" placeholder="Galván" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>		
			
			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__contrasena">
				<label for="contrasena" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="contrasena" id="contrasena" placeholder="******" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>


			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__contrasena2">
				<label for="contrasena2" class="formulario__label">Repetir Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="contrasena2" id="contrasena2" placeholder="*******" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser considir...</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Teléfono</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="4491234567" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>			
			
			<!-- Grupo: TCantidad Inicial -->
			<div class="formulario__grupo" id="grupo__cantidadI">
				<label for="cantidadI" class="formulario__label">¿Con cuanto iniciaremos?</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="cantidadI" id="cantidadI" placeholder="100,000" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La cantidad inicial solo puede contener numeros y el maximo son 20 dígitos.</p>
			</div>		

			


			<!-- Grupo: Terminos y Condiciones -->
			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos" required>
					Acepto los Terminos y Condiciones
				</label>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<!-- button -->
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn" value="Registrar">Registrate</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
	</main>

	<script src="../assets/js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>