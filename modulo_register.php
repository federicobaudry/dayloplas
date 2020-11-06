<?php 
	include("conex.php");
	$dni=$_POST['dni'];
	$nomape=$_POST['nomape'];
	$tel=$_POST['tel'];
	$contra=$_POST['contra'];
	$query="INSERT INTO `persona`(`dni`, `nombre y ape`, `tel`, `contra`) VALUES ('$dni', '$nomape', '$tel', '$contra')";
	mysqli_query($conexion,$query);
 ?>
