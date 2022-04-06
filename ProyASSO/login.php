<?php
include 'conexion.php';
$correo = $_POST['correo'];
$pass = $_POST['contrasena'];
if(empty($correo) || empty($pass)){
    echo "Datos vacios";
} else{
    $query = "select nombre,apellidos from usuario where email='".$correo."'and passwdHash='".$pass."';";    
    if(($result=mysqli_query($conn,$query))==TRUE){
        while ($row = $result->fetch_assoc()) {
            echo 'bienvenido '.$row['nombre']." ".$row['apellidos']  ;
        } 
    }else{
    }
}
   
mysqli_close($conn);
?>