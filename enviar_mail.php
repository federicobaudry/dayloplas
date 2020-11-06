<?php
    include("conex.php");
    $correo=$_POST['correo'];
    $cliente=$_POST['cliente'];
    $titulo="mail de dayloplas Santa Teresita";
    $mensaje="este mail es de prueba senor '$cliente'";
    $headers = "From: mi@cuentadeemail.com" . "\r\n" . "CC: destinatarioencopia@email.com";
 
    mail($to, $subject, $message, $headers);
    echo "si";
?>