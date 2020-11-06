<?php
    include("conexion.php");
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $tel = $_POST['tel'];
    $marca = $_POST['marca'];
    $query = "INSERT INTO `proveedor`(`correo`, `marca`, `tel`, `nom y ape`) VALUES ('".$correo."', '".$marca."', '".$tel."', '".$nombre."')";
    $arl=mysqli_query($conexion,$query);
?>