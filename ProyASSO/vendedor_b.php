<?php

include("conexion.php");

$id_vendedor=$_GET['id_vendedor'];

$sql="DELETE FROM vendedor  WHERE id_vendedor='$id_vendedor'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: personal.php");
    }

?>