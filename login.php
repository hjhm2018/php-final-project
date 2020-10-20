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

	<div id="login">
		<h2>Ingrese su usuario y contraseña para poder loguearse: </h2>
	</div>

	<div class="formulario">

	<form class="login" action="iniciar_sesion.php" method="POST">
		<p><label for="usuario">Usuario: <input id="usuario" name="usuario" type="text" placeholder="Ingrese su nombre de usuario" required maxlength="30"></label></p>
		<p><label for="clave">Clave: <input id="clave" name="clave" type="password" placeholder="Ingrese su clave" required maxlength="50"></label></p>
		<input type="submit" value="Login">
	</form>
	</div>

	<?php 
    include('footer.php');
	?>
</body>
</html>