<?php
include("conexion.php");

$medida=$_POST['medida'];
$id_tienda=$_POST['id_t'];
$descipcion=$_POST['descripcion'];
$producto=$_POST['producto'];
$almacen=$_POST['almacen'];
$categoria=$_POST['categoria'];
$precio=$_POST['precio'];
#$_vendedor=$_POST[''];
echo "eñ id de su tienda es: ".$id_tienda;
$sql="INSERT INTO 
`material`(`id_tienda`, `id_medida`, `producto`, `almacen`, `descripcion`, `precio`, `categoria`) 
VALUES
('$id_tienda','$medida','$producto','$almacen','$descipcion','$precio','$categoria');
";
$query= mysqli_query($conn,$sql);
print("Exito");
if($query){
    Header("Location: material.php");
    
}else {
}
    
?>