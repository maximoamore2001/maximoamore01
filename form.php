<?php

$nombre = $_POST["nombre"];
$mail = $_POST["correo"];
$mensaje = $_POST["mensajes"];
$header = header("location: new.html");

//como me va a llegar el cuerpo del  mail a mi , lo que la gente escribio en el form
$mensaje = "este mensaje fue enviado por " . $nombre;
$mensaje .= "su e-mail es: " . $mail;
$mensaje .= "mensaje: " . $_POST["mensajes"];
$mensaje .= "enviado el " . date("d/m/Y", time());

$para = "cybertechrosario@gmail.com";
$asunto = "este mail fue enviado de maximoamore";

//funcion mail:
//a quien le mando este mail
mail($para , $asunto ,$mensaje);

//redireccionar al haber enviado el form
header("location: new.html");


?>