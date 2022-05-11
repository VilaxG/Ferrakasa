<?php

include("conexion.php");

$id_tienda=$_GET['id_tienda'];

$sql="DELETE FROM tienda WHERE id_tienda='$id_tienda';";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: tienda.php");
    }

?>