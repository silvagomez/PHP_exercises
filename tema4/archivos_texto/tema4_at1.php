<?php
$ar=fopen("archivo01.txt","r") or die("No se pudo abrir el archivo");
$informacion=file("archivo01.txt");
echo $informacion[0];
echo "<hr>";
print_r($informacion);
foreach ($informacion as $key => $value) {
    echo utf8_encode($value."<br>");
}
fclose($ar);
?>
