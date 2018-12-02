<?php
// Comprobación error si un fichero está vacio
$archivo=fopen('vacio01.txt','r') or die('ERROR: Revisar código');
$contador_lineas=0;
$linea=fgets($archivo); // guardamos info hasta el salto de linea
if (empty($linea)) {
    echo "Estoy vacio";
} else {
    while (!feof($archivo)) { // mientras no exista final de fichero -> función feof()
        utf8_encode($linea);
        $campo[$contador_lineas]=explode("|",$linea);
        echo <<<abc
            <div>
                Info: {$campo[$contador_lineas][0]}
            </div>
abc;
        $contador_lineas++;
        $linea=fgets($archivo); // guardamos info hasta el salto de linea
    }
    fclose($archivo);
}

?>