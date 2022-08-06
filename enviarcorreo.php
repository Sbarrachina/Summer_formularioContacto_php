<?php

$destino = "sandrabarrachina1978@gmail.com";
//El correo que se enviará el mensaje

$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre: " . $nombre . "\n" ."apellido :" . $apellido . "Email: " . $email . "\n" . "Télefono :" . $telefono . "\n" . "\n". "Mensaje :" . $mensaje;
mail($destino, $asunto, $mensajeCompleto, $header);
header('Location: index.html');