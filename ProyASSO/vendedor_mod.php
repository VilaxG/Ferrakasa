<?php
include("conexion.php");

$id = $_GET['id_vendedor'];

$sql = "SELECT * FROM vendedor WHERE id_vendedor='$id'";
$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
    <title>Ferrekasa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light barra">
        <div class="container-fluid">
        <a class="navbar-brand" href="adminpage.php">
                <img src="ferrakasa.webp" alt="" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container crud">
        <div class="col-5">
            <form action="vendedor_m.php" method="POST">
                <input type="hidden" class="form-control " name="id_vendedor" value="<?php echo $row['id_vendedor']  ?>">
                <input type="text" class="form-control " name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
                <input type="text" class="form-control " name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos'] ?>">
                <input type="number" class="form-control " name="telefono" placeholder="Telefono cel" value="<?php echo $row['telefono'] ?>">
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                <a href="personal.php" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>