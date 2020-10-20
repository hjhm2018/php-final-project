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
    <h2 style="text-align: center;">Contáctenos</h2>

    <form class="contacto" method="POST" action="enviar_mail.php">
        <p>Nombre: <input type="text" name="nombre" required maxlength="30" placeholder="Ingrese su nombre" autocomplete="off" /></p>
        <p><label for="apellido">Apellido: <input type="text" name="apellido" required maxlength="50" placeholder="Ingrese su apellido"  autocomplete="off"/></label></p>
        <p><label for="">Email: <input type="email" name="correo" required maxlength="100" placeholder="Ingrese su email" autocomplete="off"/></label></p>
        <p>Motivo: 
            <select name="motivo">
                <option>Elija su motivo...</option>
                <option value="consulta">Consulta</option>
                <option value="pedido">Pedido</option>
                <option value="reclamo">Reclamo</option>
            </select>
        </p>

        <p>Mensaje: <textarea name="mensaje" rows="5" placeholder="Ingrese su mensaje" autocomplete="off"></textarea></p>
            <input type="submit" value="Enviar mensaje"/>
    </form>


<?php 
    include('footer.php');
?>
</body>
</html>