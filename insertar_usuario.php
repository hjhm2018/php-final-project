<?php

include('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$edad = $_POST['edad'];
$sitioweb = $_POST['sitioweb'];

mail($email, "Registro", "Usted se ha registrado exitosamente en la página web."."\r\n"."Recuerde que su usuario es $usuario y su clave $clave.");

mysqli_query($datos_conexion, "INSERT INTO usuarios (usuario, clave, nombre, apellido, correo, edad, sitioweb) VALUES ('$usuario', '$clave', '$nombre', '$apellido', '$email', '$edad', '$sitioweb')");

header("Location: usuario_registrado.php");

?>