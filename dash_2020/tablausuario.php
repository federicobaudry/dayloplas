<?php
    include("conexion.php");

    $query= "SELECT * FROM `persona`";
    $resultado=mysqli_query($conexion,$query);
    //$res=mysqli_fetch_array($resultado);
    while($i = mysqli_fetch_array($resultado)){
        echo "<tr>
			  <td>".$i["dni"]."</td>
              <td>".$i["nombre y ape"]."</td>
              <td>".$i["tel"]."</td>
              <td>".$i["num matricula"]."</td>
              <td>".$i["tipo"]."";   
        if($i['tipo'] == "admin"):
            echo"   <button class='btn btn-info admin' data-id='".$i["dni"]."'>Cambiar Rango</button></td>
            </tr>";
        elseif($i['tipo'] == "basico"):
            echo"   <button class='btn btn-info basico' data-id='".$i["dni"]."'>Cambiar Rango</button></td>
            </tr>";
        elseif($i['tipo'] == "matriculado"):
            echo"   <button class='btn btn-info matriculado' data-id='".$i["dni"]."'>Cambiar Rango</button></td>
            </tr>";
        endif;
    };
?>