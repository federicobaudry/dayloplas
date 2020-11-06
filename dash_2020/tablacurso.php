<?php
    include("conexion.php");

    $query= "SELECT * FROM `curso`";
    $resultado=mysqli_query($conexion,$query);
    //$res=mysqli_fetch_array($resultado);
    while($i = mysqli_fetch_array($resultado)){
        echo "<tr>
			  <td>".$i["nom curso"]."</td>
              <td>".$i["profesor"]."</td>
              <td>".$i["horarios"]."</td>
              <td>".$i["precio"]."</td>
              <td>".$i["disponible"]."";   
        if($i['disponible'] == "si"):
            echo"   <button class='btn btn-info no' data-id='".$i["id_curso"]."'>disponibilidad</button></td>
            </tr>";
        elseif($i['disponible'] == "no"):
            echo"   <button class='btn btn-info si' data-id='".$i["id_curso"]."'>disponibilidad</button></td>
            </tr>";
        endif;
    };
?>