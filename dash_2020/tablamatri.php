<?php
    include("conexion.php");

    $query= "SELECT * FROM `persona` WHERE `num matricula` != ''";
    $resultado=mysqli_query($conexion,$query);
    //$res=mysqli_fetch_array($resultado);
    while($i = mysqli_fetch_array($resultado)){
        echo "<tr>
			  <td>".$i["dni"]."</td>
              <td>".$i["nombre y ape"]."</td>
              <td>".$i["tel"]."</td>
              <td>".$i["num matricula"]."</td>
              </tr>";
    };
?>