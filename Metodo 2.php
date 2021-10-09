<?php 
$destinatario = "camilocontreras2019@gmail.com"; 
$asunto = "Este mensaje es de prueba"; 
$mensaje = "Hola, esta es una prueba de cómo envíar correos electrónicos con PHP";

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];

$info = "Nombre: ".$nombre. "Telefono: ".$telefono;

mail($destinatario,$asunto,$mensaje, $info); 
header("Location:gracias.html");
exit;
?>
