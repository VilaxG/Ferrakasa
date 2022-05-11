<?php
include("conexion.php");


$id_v=$_POST['id_vendedor'];
$n_vendedor=$_POST['nombre'];
$ap_vendedor=$_POST['apellidos'];
$t_vendedor=$_POST['telefono'];
#$_vendedor=$_POST[''];

$sql="INSERT INTO `vendedor` (`id_vendedor`, `nombre`, `apellidos`, `telefono`) VALUES('$id_v','$n_vendedor','$ap_vendedor','$t_vendedor')";
$query= mysqli_query($conn,$sql);

if($query){
    Header("Location: personal.php");
    
}else {
}

?>