<?php

session_start();

include('conexion.php');

$usuarioLogin = $_POST['usuario'];
$claveLogin = $_POST['clave'];

$nombreUsuario = mysqli_fetch_array(mysqli_query($datos_conexion, "SELECT usuario FROM usuarios WHERE usuario= '$usuarioLogin'"));

$password = mysqli_fetch_array(mysqli_query($datos_conexion, "SELECT clave FROM usuarios WHERE clave= '$claveLogin'"));


if ($usuarioLogin == $nombreUsuario['usuario'] && $claveLogin == $password['clave']) {
	$_SESSION['clientes']= $usuarioLogin;

	header("Location: usuarios.php");
} else {
	
	header("Location: datos_incorrectos.php");
}

?>