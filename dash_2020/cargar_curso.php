<?php
    include("conexion.php");
    $nombre = $_POST['nombrecurso'];
    $profe = $_POST['profe'];
    $hora = $_POST['horario'];
    $precio = $_POST['precio'];
    $descripcion=$_POST['desc'];
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
    $query = "INSERT INTO `curso`(`id_curso`, `nom curso`, `profesor`, `horarios`, `precio`, `descripcion`, `img`) VALUES (null, '$nombre', '$profe', '$hora', '$precio', '$descripcion', '$nombre_img')";
    $arl=mysqli_query($conexion,$query);
    header("location: curso.php");
?>