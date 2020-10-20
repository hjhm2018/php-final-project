<?php session_start(); ?>

<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="css/estilos.css" rel="stylesheet"/>
</head>

<body>

	<?php 
    include('header.php');
    ?>

    <div class="datos">
    
    	<h2>Datos incorrectos</h2>

    </div>

    <p>Volver a <a href="login.php">Login</a></p>

<?php 
    include('footer.php');
?>
</body>
</html>