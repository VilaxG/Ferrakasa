<?php

include("conexion.php");
$id_material = $_POST['id_material'];
$medida=$_POST['medida'];
$id_tienda=$_POST['id_t'];
$descipcion=$_POST['descripcion'];
$producto=$_POST['producto'];
$almacen=$_POST['almacen'];
$categoria=$_POST['categoria'];
$precio=$_POST['precio'];

#$_vendedor=$_POST[''];

$sql="UPDATE
`material`
SET
`id_tienda` = '$id_tienda',
`id_medida` = '$medida',
`producto` = '$producto',
`almacen` = '$almacen',
`descripcion` = '$descipcion',
`precio` = '$precio',
`categoria` = '$categoria'
WHERE
`id_material` = '$id_material';
";

$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: material.php");
    }

?>