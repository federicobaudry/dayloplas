<?php
    include("conexion.php");
    $id=$_POST['id'];
    $query="DELETE FROM `productos` WHERE `id producto`='$id'";
    $arl=mysqli_query($conexion,$query);
?>