<?php
include("conexion.php");

$id_material=$_POST['id_material'];
$id_tienda=$_POST['id_tienda'];
$cve_articulo=$_POST['cve_articulo'];
$producto=$_POST['producto'];
$encargado=$_POST['almacen'];
$_vendedor=$_POST['descripcion'];
$_vendedor=$_POST['precio'];
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