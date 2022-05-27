<?php
include('conexion.php');
header("Content-Type: application/xls; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=rep_almacen.xls");
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
    ORDER BY categoria;
";
?>

<table class="table" border="1">
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
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
