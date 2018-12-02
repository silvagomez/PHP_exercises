<?php
require_once '../../../estilo/formato_i.php';
$archivo=fopen('ventas.dat', 'r') or die('ERROR: Revisar código');
rewind($archivo);
$linea=fgets($archivo);
while (!feof($archivo)) {
    utf8_encode($linea);
    echo $linea."<br>";
    $linea=fgets($archivo);
}
fclose($archivo);
require_once '../../../estilo/formato_f.php';
?>