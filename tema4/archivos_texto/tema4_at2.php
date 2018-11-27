<?php
$archivo=fopen('contacto01.txt','r') or die('ERROR: Revisar código');
$contador_lineas=0;
while (!feof($archivo)) { // mientras no exista final de fichero -> función feof()
    $linea=fgets($archivo); // guardamos info hasta el salto de linea
    utf8_encode($linea);
    $campo[$contador_lineas]=explode("|",$linea);
    echo <<<abc
        <div>
            Nombre: {$campo[$contador_lineas][0]}
        </div>
        <div>
            Email: {$campo[$contador_lineas][1]}
        </div>
        <div>
            Web: {$campo[$contador_lineas][2]}
        </div>
        <div>
            Teléfono: {$campo[$contador_lineas][3]}
        </div>
        <br><hr><br>
abc;
    $contador_lineas++;
}
fclose($archivo);
?>