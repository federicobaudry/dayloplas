<?php  
    include("conex.php");
    if ( ! empty( $_POST ) ) {
        if ( isset( $_POST['dni'] ) && isset( $_POST['contra'] ) ) {
            
            $query = "SELECT * FROM `persona` WHERE `dni` = '".$_POST['dni']."' and  `contra` = '".$_POST['contra']."' ";  
            
            $resultado=mysqli_query($conexion,$query);
            $res=mysqli_fetch_array($resultado);
            
            if(!empty($resultado) && mysqli_num_rows($resultado) > 0){
                $_SESSION['otros'] = $res['contra'];
                $_SESSION['dni'] = $_POST['dni'];
                $_SESSION['nombre'] = $res['nombre y ape'];
                $_SESSION['tipo'] = $res['tipo'];
                $_SESSION['tel'] = $res['tel'];
                echo "si";
                return true;
            }else{
                echo "no";
            };
            
        }else
        { 
            header("Location: index.php");
        }
    }
?>