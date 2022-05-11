<?php

include("conexion.php");

$id_v=$_POST['id_vendedor'];
$n_vendedor=$_POST['nombre'];
$ap_vendedor=$_POST['apellidos'];
$t_vendedor=$_POST['telefono'];
#$_vendedor=$_POST[''];

$sql="UPDATE vendedor SET nombre='$n_vendedor',apellidos='$ap_vendedor',telefono='$t_vendedor' WHERE id_vendedor='$id_v'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: personal.php");
    }

?>