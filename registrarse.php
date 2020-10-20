<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<?php 
    include('header.php');
	?>

	<div id="registro">

	<h2>Registro</h2>

	<h3>Ingrese los siguientes datos para registrarse y posteriormente loguearse. </h3>

	</div>

	<div class="formulario">

	<form class="registro" action="insertar_usuario.php" method="POST">
		<p><label for="usuario">Nombre de usuario: <input id="usuario" name="usuario" type="text" placeholder="Ingrese su nombre de usuario" required></label></p>
		<p><label for="clave">Clave: <input id="clave" name="clave" type="password" placeholder="Ingrese su clave" required></label></p>
		<p><label for="nombre">Nombre: <input id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre" required></label></p>
		<p><label for="apellido">Apellido: <input id="apellido" name="apellido" type="text" placeholder="Ingrese su apellido" required></label></p>
		<p><label for="edad">Edad: <input id="edad" name="edad" type="number" placeholder="Ingrese su edad"></label></p>
		<p><label for="correo">Email: <input id="correo" name="correo" type="email" placeholder="Ingrese su email" required></label></p>
		<p><label for="sitioweb">Sitio Web: <input id="sitioweb" name="sitioweb" type="text" placeholder="Ingrese su Sitio Web"></label></p>		
		<input type="submit" value="Registrarse">
	</form>

	</div>


	<?php 
    include('footer.php');
	?>
</body>
</html>