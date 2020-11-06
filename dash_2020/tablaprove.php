<?php
    include("conexion.php");
    $query= "SELECT * FROM `proveedor` INNER JOIN `marca` ON marca.id_marca = proveedor.marca";
    $resultado=mysqli_query($conexion,$query);
    //$res=mysqli_fetch_array($resultado);
    while($i = mysqli_fetch_array($resultado)){
        echo "<tr>
			  <td>".$i["nom y ape"]."</td>
              <td>".$i["tel"]."</td>
              <td>".$i["marcanom"]."</td>
              <td>".$i["correo"]."</td>
            </tr>";
    };
?>