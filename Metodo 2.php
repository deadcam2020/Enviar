<?php 
$destinatario = "camilocontreras2019@gmail.com"; 
$asunto = "Este mensaje es de prueba"; 
$mensaje = "Hola, esta es una prueba de cómo envíar correos electrónicos con PHP";

$nombre = $_POST['nombre']


mail($destinatario,$asunto,$mensaje) 
?>