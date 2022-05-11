<?php
include("conexion.php");
$sql = "SELECT *  FROM material";
$qry = "SELECT id_tienda from tienda;";
$rw = mysqli_query($conn, $qry);

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
            <a class="navbar-brand" href="#">
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
                <form action="material_a.php" method="POST">
                    <input type="number" class="form-control " name="id_material" placeholder="Id">
                    <select style="width: 100%; margin-bottom: 5px;">
                        <?php                        
                        while ($rwid = mysqli_fetch_array($rw)) {
                        ?>
                            <option value="<?php $rwid['id_tienda'] ?>"><?php echo $rwid['id_tienda'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="number" class="form-control " name="cve_articulo" placeholder="Clave del articulo">
                    <input type="text" class="form-control " name="producto" placeholder="Categoria">
                    <input type="text" class="form-control " name="almacen" placeholder="Almacen">
                    <input type="text" class="form-control " name="descripcion" placeholder="Descripcion">
                    <input type="number" class="form-control " name="precio" placeholder="precio por pieza">
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
                                <th><?php echo $row['id_material'] ?></th>
                                <th><?php echo $row['id_tienda'] ?></th>
                                <th><?php echo $row['cve_articulo'] ?></th>
                                <th><?php echo $row['producto'] ?></th>
                                <th><?php echo $row['almacen'] ?></th>
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