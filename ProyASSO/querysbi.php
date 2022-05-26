<?php
$sql = "SELECT
f.fecha_compra fecha,
m.producto producto,
t.nombre_tienda lugar,
fa.cantidad cantidad
FROM
factura f
JOIN factura_material fa ON
f.id_factura = fa.id_factura
JOIN material m ON
m.id_material = fa.id_material
JOIN cliente c ON
f.id_cliente = c.id_cliente
JOIN tienda t ON
t.id_tienda = f.id_tienda
ORDER BY
fecha ASC;";

$sqlreb = "SELECT
t.nombre_tienda,
t.direccion,
m.producto,
m.almacen,
m.id_material
FROM
material m
JOIN tienda t ON
t.id_tienda = m.id_tienda
ORDER BY
 m.almacen;";

$sqlpm = "SELECT
t.nombre_tienda,
t.direccion,
m.producto,
fa.cantidad
FROM
material m
JOIN tienda t ON
m.id_tienda=t.id_tienda
JOIN factura_material fa ON
fa.id_material = m.id_material
ORDER BY
fa.cantidad DESC;";

$sqlpmm = "SELECT
t.nombre_tienda,
t.direccion,
m.producto,
fa.cantidad
FROM
material m
JOIN tienda t ON
m.id_tienda=t.id_tienda
JOIN factura_material fa ON
fa.id_material = m.id_material
ORDER BY
fa.cantidad ASC;";

?>