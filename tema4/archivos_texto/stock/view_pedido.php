<?php
require_once '../../../estilo/formato_i.php';

$archivo=fopen("pedidos.txt","r") or die("ERROR");
$linea=fgets($archivo);
while (!feof($archivo)) {
    echo $linea."<br>";
    $linea=fgets($archivo);
}
fclose($archivo);
echo <<<html
    <br>    
    <a href="stock.html">Volver</a>
html;

require_once '../../../estilo/formato_f.php';
?>