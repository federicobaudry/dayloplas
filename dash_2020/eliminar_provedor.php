<?php
    include("conexion.php");
    $idprove=$_POST['prov'];
    $query="DELETE FROM `proveedor` WHERE `id_proveedor`=".$idprove."";
    $arl=mysqli_query($conexion,$query);
?>