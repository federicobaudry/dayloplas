<?php
    include("conexion.php");
    $id = $_POST['id'];
    $query = "UPDATE `persona` SET `tipo`= 'matriculado' WHERE `dni`= '$id'";
    $arl = mysqli_query($conexion,$query);
?>