<?php
include("conexion.php");

$id = $_GET['id_material'];

$sql = "SELECT * FROM material WHERE id_material='$id'";

$sql_med = "SELECT id_medida, text_medida FROM unidad_medida;";

$sql_ti = "SELECT id_tienda, nombre_tienda FROM tienda;";

$query      = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

$query_med  = mysqli_query($conn, $sql_med);

$query_ti   = mysqli_query($conn, $sql_ti);
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
            <a class="navbar-brand" href="#">
                <img src="ferrakasa.webp" alt="" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container crud">
        <div class="row justify-content-center">
            <div class="col-6 ">
                <form action="material_m.php" method="POST">
                    <input type="text" hidden class="form-control " name="id_material" value="<?php echo $row['id_material']  ?>">
                    <select class="form-select" id="id_t" name="id_t" style="margin-bottom: 5px;">
                        <?php
                        while ($rw = mysqli_fetch_array($query_ti)) {
                        ?>
                            <option value="<?php echo $rw['id_tienda'] ?>">
                                <?php echo $rw['id_tienda'] . ' - ' . $rw['nombre_tienda'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>

                    <select class="form-select" id="medida" name="medida" style="margin-bottom: 5px;">
                        <?php
                        while ($rw = mysqli_fetch_array($query_med)) {
                        ?>
                            <option value="<?php echo $rw['id_medida'] ?>">
                                <?php echo $rw['text_medida'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="text" class="form-control " name="producto" placeholder="Nombre" value="<?php echo $row['producto'] ?>">
                    <input type="number" class="form-control " name="almacen" placeholder="cantidad en el almacen" value="<?php echo $row['almacen'] ?>">
                    <textarea type="text" class="form-control " name="descripcion" placeholder="descripcion del producto"  style="margin-bottom: 5px;" >
                    <?php echo $row['descripcion'] ?>
                    </textarea>
                    <input type="number" min="1" max="999" class="form-control " name="precio" placeholder="Precio por unidad" value="<?php echo $row['precio'] ?>">
                    <input type="text" class="form-control " name="categoria" placeholder="categoria" value="<?php echo $row['categoria'] ?>">
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    <a href="material.php" class="btn btn-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>