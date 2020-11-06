<?php
    include('conex.php');
    $mat=$_POST['matri'];
    $dni=$_SESSION['dni'];
    $query="UPDATE `persona` SET `num matricula` = '$mat',`tipo`= 'matriculado' WHERE `dni` = '$dni'";
    $arl=mysqli_query($conexion,$query);
    echo"si";
?>