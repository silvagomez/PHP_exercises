<?php
require_once '../../../estilo/formato_i.php';
$archivo=fopen('ventas.dat', 'r') or die('ERROR: Revisar código');
rewind($archivo);
$linea=fgets($archivo);
$contador_linea=1;
$campo=[];
while (!feof($archivo)) {
    utf8_encode($linea);
    $campo["registro".$contador_linea]=explode("|",$linea);
    echo $linea."<br>";
    $linea=fgets($archivo);
}
fclose($archivo);
foreach ($campo as $key => $value) {
    echo $key;
    foreach ($value as $key2 => $value2) {
        echo $value2;
    }
}
print_r($campo);
require_once '../../../estilo/formato_f.php';
?>