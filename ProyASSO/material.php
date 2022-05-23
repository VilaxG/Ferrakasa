<?php
include("conexion.php");

$sql_ti = "SELECT 
id_tienda, nombre_tienda 
FROM 
tienda;";
$sql =
    "SELECT
    m.id_material id_m,
    concat(m.id_tienda, ' - ', t.nombre_tienda) tienda,
    m.id_tienda id_t,
    m.producto producto,
    m.almacen almacen,
    m.descripcion descripcion,
    concat('$', m.precio) precio,
    m.categoria categoria,
    m.medida medida
FROM
    material m
JOIN tienda t ON
    t.id_tienda = m.id_tienda
    ORDER BY id_m;
";
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
                <h2>Registrar nuevo material</h2>
                <form action="material_a.php" method="POST">
                    <select class="form-select" id ="id_t" name="id_t" style="margin-bottom: 5px;">
                        <?php
                        $query = mysqli_query($conn, $sql_ti);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?php echo $row['id_tienda'] ?>">
                                <?php echo $row['id_tienda'] . ' - ' . $row['nombre_tienda'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>

                    <select class="form-select" id="medida" name="medida" style="margin-bottom: 5px;">
                        <option value="kg">kg</option>
                        <option value="pza">pza</option>
                        <option value="m">m</option>
                        <option value="m2">m2</option>
                        <option value="m3">m3</option>
                    </select>
                    <input type="text" class="form-control " name="producto" placeholder="Producto">
                    <input type="number" class="form-control " name="almacen" placeholder="Almacen">
                    <input type="text" class="form-control " name="descripcion" placeholder="Descripcion">
                    <input type="number" class="form-control " name="precio" placeholder="Precio por pieza">
                    <input type="text" class="form-control " name="categoria" placeholder="Categoria">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-9">
                <h2>Modificacion y Bajas de materiales</h2>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Tienda</th>
                            <th>Descripcion</th>
                            <th>Producto</th>
                            <th>Unidades en almacen</th>
                            <th>Categoria</th>
                            <th>Medida</th>
                            <th>Precio unitario</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['id_m'] ?></th>
                                <th><?php echo $row['tienda'] ?></th>
                                <th><?php echo $row['descripcion'] ?></th>
                                <th><?php echo $row['producto'] ?></th>
                                <th><?php echo $row['almacen'] ?></th>
                                <th><?php echo $row['categoria'] ?></th>
                                <th><?php echo $row['medida'] ?></th>
                                <th><?php echo $row['precio'] ?></th>
                                <th><a href="material_mod.php?id_material=<?php echo $row['id_m'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="material.php?id_material=<?php echo $row['id_m'] ?>" class="btn btn-danger">Eliminar</a></th>
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