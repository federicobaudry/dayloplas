<?php
    include("conexion.php");
    $query= "SELECT * FROM `productos` INNER JOIN marca ON marca.id_marca = productos.marca INNER JOIN proveedor ON proveedor.id_proveedor = productos.provedor";
    $resultado=mysqli_query($conexion,$query);
    //$res=mysqli_fetch_array($resultado);
    while($i = mysqli_fetch_array($resultado)){
        echo "<tr>
			  <td>".$i["nombre"]."</td>
              <td>".$i["marcanom"]."</td>
              <td>".$i["nom y ape"]."</td>
              <td><img src='../img/".$i["img"]."' alt='imagen del producto' height='50px' width='50px'></td>
              <td><button class='btn btn-danger eliminar' data-id='".$i["id producto"]."'>Eliminar</button></td>
            </tr>";
    };
?>