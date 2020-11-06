<?php
    include("conexion.php");
    $id=$_POST['id'];
    $query="UPDATE `curso` SET `disponible`='si' WHERE `id_curso`='$id'";
    $arl=mysqli_query($conexion,$query);
?>