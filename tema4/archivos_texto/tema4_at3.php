<?php
// Comprobación error si un fichero está vacio
// No me genera el error!!!!!!!!!!!!
$archivo=fopen('vacio01.txt','r') or die('ERROR: Revisar código');
$contador_lineas=0;
while (!feof($archivo)) { // mientras no exista final de fichero -> función feof()
    $linea=fgets($archivo); // guardamos info hasta el salto de linea
    utf8_encode($linea);
    $campo[$contador_lineas]=explode("|",$linea);
    echo <<<abc
        <div>
            Info: {$campo[$contador_lineas][0]}
        </div>
abc;
    $contador_lineas++;
}
fclose($archivo);
?>