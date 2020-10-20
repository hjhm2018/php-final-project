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

    <div class="registrado">
    
    <h2>Usted se ha registrado exitosamente.</h2>

    </div>

    <img class="imagen" src="img/yes.gif" alt="yes">

    <p>Vaya a la sección de <a href="login.php">Login</a> para conocer los beneficios de estar registrado.</p>

<?php 
    include('footer.php');
?>
</section>
</body>
</html>