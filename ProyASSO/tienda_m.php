<?php

include("conexion.php");

$id_tienda=$_POST['id_tienda'];
$nombre_tienda=$_POST['nombre_tienda'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$encargado=$_POST['encargado'];

#$_vendedor=$_POST[''];

$sql="UPDATE tienda SET nombre_tienda='$nombre_tienda',direccion='$direccion',telefono='$telefono',encargado='$encargado' WHERE id_tienda='$id_tienda'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: tienda.php");
    }

?>