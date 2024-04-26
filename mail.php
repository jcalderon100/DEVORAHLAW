<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['textarea'];

$mensaje = "Este Mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el" . date('d/m/Y', time());

$to = 'julio.calderon.100@gmail.com'

mail($to, utf8_decode($mensaje), $header);

header('Location:https://deborahko.com/');



?>