<?php
    include("conexion.php");
    $cursoid=$_POST['curso'];
    $query="DELETE FROM `curso` WHERE `id_curso`=".$cursoid."";
    $arl=mysqli_query($conexion,$query);
?>