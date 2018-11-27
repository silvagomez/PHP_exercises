<?php
echo "<h2>Funciones de lectura de archivos</h2><br>";
echo "<b>1. Ahora se lee todo con fread()</b><br>";
$archivo=fopen('archivo01.txt','r');
$linea=fread($archivo, filesize('archivo01.txt'));
echo utf8_encode($linea);
fclose($archivo);
?>