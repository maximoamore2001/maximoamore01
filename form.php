<?php

$nombre = $_POST["txtNombre"];
$mail = $_POST["txtCorreo"];
$mensaje = $_POST["txtMensaje"];

//como me va a llegar el cuerpo del  mail a mi , lo que la gente escribio en el form
$mensaje = "este mensaje fue enviado por " . $nombre . ",/r/n";
$mensaje .= "su e-mail es: " . $mail . ",/r/n";
$mensaje .= "mensaje: " . $_POST["mensaje"] . ",/r/n";
$mensaje .= "enviado el " . date("d/m/Y", time());

$para = "cybertechrosario@gmail.com";
$asunto = "este mail fue enviado de maximoamore";

//funcion mail:
//a quien le mando este mail
mail($para , $asunto , utf8_decode($mensaje), $header);

//redireccionar al haber enviado el form
header("location:new.html");


?>