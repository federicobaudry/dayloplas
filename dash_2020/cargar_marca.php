<?php
    include("conexion.php");
    $nom=$_POST['nombre'];
    $query="INSERT INTO `marca`(`id_marca`, `marcanom`) VALUES (null, '".$nom."')";
    $arl=mysqli_query($conexion,$query);
?>