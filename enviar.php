<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$cel = $_POST['cel'];
$mensaje = $_POST['Mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Su celular es: " .$cel . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'pruebawebrp@gmail.com';
$asunto = $_POST['Asunto'];

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.php");
?>