<?php
include('conexion.php');
include('querysbi.php');
header("Content-Type: application/xls; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=rep_historial_v.xls");

?>

<table class="table" border="1">
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