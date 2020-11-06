<?php
    include("conexion.php");
    $id = $_POST['id'];
    $query = "UPDATE `persona` SET `tipo`= 'admin' WHERE `dni`= '$id'";
    $arl = mysqli_query($conexion,$query);
?>