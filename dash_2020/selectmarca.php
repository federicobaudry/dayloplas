<?php
    include("conexion.php");
    $query="SELECT * FROM `marca`";
    $arl=mysqli_query($conexion,$query);
    while($i = mysqli_fetch_array($arl)){
        echo"<option value=".$i[0].">".$i[1]."</option>";
    };
?>