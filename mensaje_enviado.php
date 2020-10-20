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
    
    <h2>Mensaje recibido</h2>

    <p>Muchas gracias por su mensaje. En breve lo estaremos contactando.</p>

<?php 
    include('footer.php');
?>
</section>
</body>
</html>