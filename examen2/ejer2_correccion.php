<?php
$archivo=fopen("nuevo/articulos.txt","r") or die("ERROR 1");
$linea_archivo=fgets($archivo);
$contador_liena1=1;
$contador_liena2=1;
echo "TIPO----->IMPORTE<BR>";
while (!feof($archivo)) {
    $campos=explode("|",$linea_archivo);
    print_r($campos);
    echo "<br>";
    $linea_archivo=fgets($archivo);
    $compare=explode("|",$linea_archivo);
    while ($campos[0]==$compare[0]) {
        echo $campos[0];
    }
    $linea_archivo=fgets($archivo);
    
}
fclose($archivo);
?>