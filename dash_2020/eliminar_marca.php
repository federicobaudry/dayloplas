<?php
    include("conexion.php");
    $marcaid=$_POST['marca'];
    $query="DELETE FROM `marca` WHERE `id_marca`='$marcaid'";
    $arl=mysqli_query($conexion,$query);
?>