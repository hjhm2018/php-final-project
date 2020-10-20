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

	<div class="inicio">

	<h1>Esta es la página de inicio</h1>

	<p>Esto es parte del trabajo final integrador del curso de PHP & MySQL de UTN Resistencia.</p>

	<img class="php" src="img/php.png" alt="php">

	<p>Tiene una pestaña de registro, de login (que obtiene los datos del usuario registrado desde la base de datos), de contacto (que guarda la consulta en la base de datos y envía un email al usuario).</p>

	<p>También se hace uso de la sesión, la cual oculta las pestañas de login  y registrarse, y muestra las pestañas de salir para cerrar la sesión y de contacto.</p>

	</div>


	<?php 
    include('footer.php');
	?>
</body>
</html>