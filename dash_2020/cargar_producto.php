<?php
    include("conexion.php");
    $nombre=$_POST['nombre'];
    $especie=$_POST['especie'];
    $marca=$_POST['marca'];
    $stock=$_POST['stock'];
    $precio=$_POST['precio'];
    $desc=$_POST['desc'];
    $nombre_img = $_FILES['img']['name'];
    $tipo = $_FILES['img']['type'];
    if (($_FILES["img"]["type"] == "image/gif")
    || ($_FILES["img"]["type"] == "image/jpeg")
    || ($_FILES["img"]["type"] == "image/jpg")
    || ($_FILES["img"]["type"] == "image/png")){
        $directorio = $_SERVER['DOCUMENT_ROOT'].'/img/';
        move_uploaded_file($_FILES['img']['tmp_name'],$directorio.$nombre_img);
    }else{
        echo "No se puede subir una imagen con ese formato ";
    };
    $provedor=$_POST['provedor'];
    $query = "INSERT INTO `productos`(`nombre`, `especie`, `marca`, `stock`, `precio`, `descripcion`, `img`, `provedor`) VALUES ('".$nombre."', '".$especie."', '".$marca."', '".$stock."', '".$precio."', '".$desc."','".$nombre_img."', '".$provedor."')";
    $arl=mysqli_query($conexion,$query);
    header("location: productos.php");
?>