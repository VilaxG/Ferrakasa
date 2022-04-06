<?php
include 'conexion.php';
$correo = $_POST['correo'];
$pass = $_POST['contrasena'];
if(empty($correo) || empty($pass)){
    echo "Datos vacios";
} else{
    $query = "select nombre,apellidos from usuario where email='".$correo."'and passwdHash='".$pass."';";    
    $result=mysqli_query($conn,$query);
    if(!$result){
        echo "datos incorrectos";
    }else{
        /*while ($row = $result->fetch_assoc()) {*/
            $row = $result->fetch_assoc();
            echo 'bienvenido '.$row['nombre']." ".$row['apellidos']  ;
        /*} */
    }
}
   
mysqli_close($conn);
?>