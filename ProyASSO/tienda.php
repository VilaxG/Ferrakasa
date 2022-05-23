<?php
include("conexion.php");
$sql = "SELECT *  FROM tienda";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="es">

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
        <div class="row">
            <div class="col-3">
                <h2>Registrar nueva tienda</h2>
                <form action="tienda_a.php" method="POST">
                    <!--<input type="number" class="form-control " name="id_tienda" placeholder="Id">-->
                    <input type="text" class="form-control " name="nombre_tienda" placeholder="Nombre">
                    <input type="text" class="form-control " name="direccion" placeholder="Direccion">
                    <input type="number" class="form-control " name="telefono" placeholder="Telefono">
                    <input type="text" class="form-control " name="encargado" placeholder="Encargado">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-9">
                <h2>Modificacion y Bajas de tiendas</h2>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Encargado</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['id_tienda'] ?></th>
                                <th><?php echo $row['nombre_tienda'] ?></th>
                                <th><?php echo $row['direccion'] ?></th>
                                <th><?php echo $row['telefono'] ?></th>
                                <th><?php echo $row['encargado'] ?></th>
                                <th><a href="tienda_mod.php?id_tienda=<?php echo $row['id_tienda'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="tienda_b.php?id_tienda=<?php echo $row['id_tienda'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>