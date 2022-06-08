<?php
$servername = "localhost";
$database = "ferrekasa";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database,3306);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/*echo "Connected successfully";

$result=mysqli_query($conn,"Select * from usuario");
echo "<br>";
while ($row = $result->fetch_assoc()) {
    echo $row['nombre']." ".$row['apellidos']."<br>"  ;
}   
mysqli_close($conn);*/
?>