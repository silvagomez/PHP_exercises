<?php
$conexion=mysqli_connect("localhost", "root", "", "tienda") or die("ERROR en la conexión");
$q1=<<<sql
    CREATE TABLE tabla_importe3 SELECT tipo_articulo, sum((cant*precio)) as importe FROM articulos GROUP BY tipo_articulo
sql;
$q2=<<<sql
    CREATE TABLE tabla_importe( tipo_articulo VARCHAR(30) NOT NULL , importe INT NOT NULL ) ENGINE = innoDB;
sql;
$registro=mysqli_query($conexion,$q1) or die ("ERROR en la query");
echo "Tabla creada exitosamente";
mysqli_close($conexion);
?>
SELECT tipo_articulo, SUM(importe) FROM `tabla_importe2` GROUP BY tipo_articulo
SELECT tipo_articulo, sum((cant*precio)) as importe FROM `articulos` GROUP BY tipo_articulo

$q1=<<<sql
    CREATE TABLE tabla_importe3 SELECT tipo_articulo, (cant*precio) as importe FROM articulos GROUP BY tipo_articulo , importe
sql;