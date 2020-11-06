<?php
    include("conex.php");
    $query= "SELECT * FROM `productos`";
    $resultado=mysqli_query($conexion,$query);
    $i = array();
    $cont = 0;
    while($aux = mysqli_fetch_assoc($resultado)){
        $i[$cont] = $aux;
        $cont++;
    };
    $j=0;
    while(true){
        $contador=0;
        echo "<div class='card-deck mb-3 text-center'>";
        while($contador++ < 3){
        echo '<div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-bold">'.$i[$j]['nombre'].'</h4>
                </div>
                <div class="card-body">
                    <img src="img/'.$i[$j]['img'].'" class="card-img-top">
                    <h1 class="card-title pricing-card-title precio">$ <span class="">'.$i[$j]['precio'].'</span></h1>
                    
                    <ul class="list-unstyled mt-3 mb-4">
                        <li></li>
                        <li>'.$i[$j]['descripcion'].'</li>
                    </ul>
                    <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="'.$i[$j]['id producto'].'">Comprar</a>
                </div>
            </div>';
            if(array_key_exists($j+1, $i)){
                $j++; 
            }else{
            break;
            };
            
        }
        echo "</div>";
        if($j == count($i)-1){
        break;
        }
        }
?>