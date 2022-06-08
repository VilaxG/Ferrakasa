<?php
include('conexion.php');
include('querysbi.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bi.css">
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
    <div class="container menuR">
        <div class="row">
            <div class="col-2 subMR">
                <div class="d-flex ">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            Ventas del ultimo mes
                        </button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            Reporte de reabastecimiento
                        </button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            Producto mas vendido
                        </button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            Productos menos vendidos
                        </button>
                        <button class="nav-link" id="v-pills-excel-tab" data-bs-toggle="pill" data-bs-target="#v-pills-excel" type="button" role="tab" aria-controls="v-pills-excel" aria-selected="false">
                            Descargar datos
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <table class="table">
                            <thead class="table-success table-striped">
                                <tr>
                                    <th>Fecha de la compra</th>
                                    <th>Producto</th>
                                    <th>Lugar</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <th><?php echo $row[0] ?></th>
                                        <th><?php echo $row[1] ?></th>
                                        <th><?php echo $row[2] ?></th>
                                        <th><?php echo $row[3] ?></th>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <table class="table">
                            <thead class="table-success table-striped">
                                <tr>
                                    <th>Lugar</th>
                                    <th>direccion</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Reabastecer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($conn, $sqlreb);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <th><?php echo $row[0] ?></th>
                                        <th><?php echo $row[1] ?></th>
                                        <th><?php echo $row[2] ?></th>
                                        <th><?php echo $row[3] ?></th>
                                        <th>
                                            <a href="material_mod.php?id_material=<?php echo $row[4] ?>" class="btn btn-info"> Reabastecer</a>
                                        </th>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <table class="table">
                            <thead class="table-success table-striped">
                                <tr>
                                    <th>Lugar</th>
                                    <th>direccion</th>
                                    <th>Producto</th>
                                    <th>Cantidad vendida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($conn, $sqlpm);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <th><?php echo $row[0] ?></th>
                                        <th><?php echo $row[1] ?></th>
                                        <th><?php echo $row[2] ?></th>
                                        <th><?php echo $row[3] ?></th>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <table class="table">
                            <thead class="table-success table-striped">
                                <tr>
                                    <th>Lugar</th>
                                    <th>direccion</th>
                                    <th>Producto</th>
                                    <th>Cantidad vendida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($conn, $sqlpmm);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <th><?php echo $row[0] ?></th>
                                        <th><?php echo $row[1] ?></th>
                                        <th><?php echo $row[2] ?></th>
                                        <th><?php echo $row[3] ?></th>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="v-pills-excel" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="row">
                            <div class="col-2">
                                <a href="reporteHV.php" class="btn btn-warning">Descargar historial de ventas</a>
                                <br><br>
                                <a href="reporteAlmacen.php" class="btn btn-warning">Descargar reporte de inventario actual</a>
                                <br><br>
                                <a href="reporteMV.php" class="btn btn-warning">Descargar reporte de productos mejor vendidos</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>