<?php
include("conexion.php");

$id_tienda=$_POST['id_tienda'];
$nombre_tienda=$_POST['nombre_tienda'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$encargado=$_POST['encargado'];
#$_vendedor=$_POST[''];

$sql="INSERT INTO `tienda` (`nombre_tienda`, `direccion`, `telefono`,`encargado`) VALUES('$nombre_tienda','$direccion','$telefono','$encargado')";
$query= mysqli_query($conn,$sql);
print("Exito");
if($query){
    print("Exito");
    Header("Location: tienda.php");
    
}else {
}

?>