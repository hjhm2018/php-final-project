<?php

include('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['correo'];
$motivo = $_POST['motivo'];
$mensaje = $_POST['mensaje'];

$contenido_mail = "Nombre: ".$nombre."\r\n"."Apellido: ".$apellido."\r\n"."Email: ".$email."\r\n"."Motivo: ".$motivo."\r\n"."Mensaje: ".$mensaje;

$remitente = "From: $nombre $apellido <$email>";

mail("geo.ecuaciones@gmail.com", "Mensaje enviado desde el sitio web", $contenido_mail, $remitente);

mail($email, "Re: $motivo", "Hemos recibido su mensaje, lo contactaremos en breve");

mysqli_query($datos_conexion, "INSERT INTO consultas (nombre, apellido, correo, motivo, mensaje) VALUES ('$nombre', '$apellido', '$email', '$motivo', '$mensaje')");

header("Location: mensaje_enviado.php");

?>