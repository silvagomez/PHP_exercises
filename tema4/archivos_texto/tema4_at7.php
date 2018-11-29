<?php
echo "<h2>Funciones de lectura de archivos</h2><br>";
echo "<b>1. Ahora se lee todo con fread()</b><br>";
$archivo=fopen('archivo01.txt','r') or die('ERROR: Revisar código');
$linea=fread($archivo, filesize('archivo01.txt'));
echo utf8_encode($linea)."<br>";
fclose($archivo);
//
echo "<br><br>";
echo "<b>2. Ahora se lee línea por línea con fgets()</b><br>";
$archivo=fopen('archivo01.txt','r') or die('ERROR: Revisar código');
$contador_lineas=0;
while (!feof($archivo)) { // mientras no exista final de fichero -> función feof()
    $linea=fgets($archivo); // guardamos info hasta el salto de linea
    echo utf8_encode($linea)."<br>";
    $contador_lineas++;
}
fclose($archivo);
//
echo "<br>";
echo "<b>3. Ahora se lee carácter a carácter fgetc()</b><br>";
$archivo=fopen('archivo01.txt','r') or die('ERROR: Revisar código');
$contador_caracter=0;
while(!feof($archivo)){
    echo utf8_encode(fgetc($archivo));
    $contador_caracter++;
}
fclose($archivo);
echo "<br>Contó ".$contador_caracter." carácteres.";
//
echo "<br><br><br>";
echo "<b>4. Ahora se lee todo a una matriz con file()</b><br>";
$archivo=fopen('archivo01.txt','r') or die('ERROR: Revisar código');
$info=file('archivo01.txt'); // hay que dar la ruta, no sirve si coloco $archivo
print_r($info);
fclose($archivo);
//
echo "<br><br><br>";
echo "<b>5. Ahora se lee todo y se imprime con readfile()</b><br>";
$archivo=fopen('archivo01.txt','r') or die('ERROR: Revisar código');
readfile('archivo01.txt');
fclose($archivo);
?>