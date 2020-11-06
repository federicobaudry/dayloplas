<?php
    include("conex.php");
    $query="SELECT * FROM `curso`";
    $arl=mysqli_query($conexion,$query);
    while($i = mysqli_fetch_array($arl)){
        echo "<li><a class='text-muted' href='cursos.php'>".$i[1]."</a></li>";
    };
?>