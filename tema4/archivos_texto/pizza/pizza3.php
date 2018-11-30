<?php
$archivo=fopen("pizza01.txt","r") or die("No se pudo abrir el archivo");
$linea=fread($archivo, filesize("pizza01.txt")); // leemos el fichero completo, filesize() se usa para saber si hay algún contenido en el archivo.txt que se comprueba a través de los bytes que tiene (peso). Sí no hay contenido sale un mensaje de error php
echo utf8_decode($linea);
fclose($archivo);
?>