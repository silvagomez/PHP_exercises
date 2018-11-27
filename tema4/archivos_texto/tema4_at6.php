<?php
$archivo=fopen('contacto01.txt','r') or die('ERROR: Revisar código');
$contador_lineas=0;
$titulos = array('Nombre', 'Email', 'Web','Teléfono');
while (!feof($archivo)) { // mientras no exista final de fichero -> función feof()
    $linea=fgets($archivo); // guardamos info hasta el salto de linea
    utf8_encode($linea);
    $campo[$contador_lineas]=explode("|",$linea);
    for ($x=0; $x < count($titulos); $x++) { 
            echo <<<abc
            <div>
            {$titulos[$x]} = {$campo[$contador_lineas][$x]}
            </div>
abc;
    }
    $contador_lineas++;
    echo "<br>";
}
fclose($archivo);
$field= array('usuario0'=> array('Nombre' => '', 'Email' => '', 'Web' => '', 'Teléfono' => ''));
    //print_r($field);
?>