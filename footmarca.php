<?php
    include("conex.php");
    $query="SELECT * FROM `marca`";
    $arl=mysqli_query($conexion,$query);
    while($i = mysqli_fetch_array($arl)){
        echo "<li><p class='text-muted'>".$i[1]."</p></li>";
    };
?>