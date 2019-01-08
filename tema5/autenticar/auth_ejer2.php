<?php
$conection = mysqli_connect("localhost","root","","dwes") or die("Error en la conexión");

$q=<<<sql
INSERT INTO usuarios VALUES('dwes',md5('abc123.'))
sql;

$registro=mysqli_query($conection,$q) or die ("Error");

mysqli_close($conection);
?>