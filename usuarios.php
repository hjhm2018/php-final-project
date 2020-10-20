<?php session_start(); ?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="css/estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<?php 
    include('header.php');
    ?>

    <div class="usuarios">
    	<h2>Usted se ha logueado con éxito.</h2>
    </div>
    
    

    <img src="img/success.gif" alt="success">

    <p>Ahora si se podrá comunicar con nosotros a través del siguiente enlace <a href="contacto.php">Contacto</a> o directamente en la pestaña en la barra de navegación.</p>

    <p>Puede cerrar su sesión en la pestaña Salir o usando éste enlace <a class="salir" href="salir.php">Salir</a>.</p>

    

<?php 
    include('footer.php');
?>
</section>
</body>
</html>