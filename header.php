<header>
	<h1>Trabajo Final Integrador</h1>
	<h2>PHP & MySQL</h2>
	<h3>UTN Resistencia</h3>
	<nav>
		<a href="index.php">Home</a>
		
		<?php if(isset($_SESSION['clientes'])) { ?>
			
		<a href="usuarios.php">Usuarios</a>
		<a href="contacto.php">Contacto</a>
		<a class="salir" href="salir.php">Salir</a>

		<?php } else {?>
		<a href="registrarse.php">Registrarse</a>
		<a href="login.php">Login</a>
		<?php } ?>
		
		
	</nav>
</header>