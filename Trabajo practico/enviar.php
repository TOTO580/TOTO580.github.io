<?php
// recogemos los datos del formulario
$nombre - $_POST["item-1"];
$zona - $_POST["item-2"];
$telefono - $_POST["item-3"];
$provincia - $_POST["item-4"];
$email - $_POST["item-5"];
$comentario = $_POST["item-6"];


$mensaje = "Este mensaje fue enviado por" . $nombre . "\r\n"; 
$mensaje = "Su e-mail es" . $email . "\r\n"; 
$mensaje = "mensaje" . $comentario . "\r\n";


$para = "tomasmonterotrabajo@gmai.com";
$asunto = "Este mail fue enviado desde la web";

header("Location:exito.html");
