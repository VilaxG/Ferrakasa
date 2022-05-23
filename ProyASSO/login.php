<?php
include ('conexion.php');
$correo = $_POST['correo'];
$pass = $_POST['contrasena'];
if(empty($correo) || empty($pass)){
    Header("Location: administrador.php");
} else{
    $query = "select idUsuario from usuario where email='".$correo."'and pswd='".$pass."';";    
    $result=mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    if($row[0]!=null){
        echo "hay datos";
        header("Location: adminpage.php");
    }else{
        echo "no hay datos";
        header("Location: administrador.php");
    }
}
   
mysqli_close($conn);
?>