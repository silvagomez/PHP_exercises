<?php
//abro el articulos 2 veces para compara uno con otro
$archivo1=fopen("nuevo/articulos.txt","r") or die("ERROR 1");
$archivo2=fopen("nuevo/articulos.txt","r") or die("ERROR 1");
$linea_archivo1=fgets($archivo1);
$contador_liena1=1;
$contador_liena2=1;
echo "TIPO----->IMPORTE<BR>";
while (!feof($archivo1)) {
    
    $campos1[$contador_liena1]=explode("|",$linea_archivo1);

    $linea_archivo2=fgets($archivo2);
    $campos2[$contador_liena2]=explode("|",$linea_archivo2);

    while($campos1[$contador_liena1][0]==$campos2[$contador_liena2][0] && $campos1[$contador_liena1][1]!=$campos2[$contador_liena2][1]){
        // echo "art iguales y codigo distinto<br>";
        $importe_articulo1=$campos1[$contador_liena1][2]*$campos1[$contador_liena1][3];
        $importe_articulo2=$campos2[$contador_liena2][2]*$campos2[$contador_liena2][3];
        $total_importe=$importe_articulo1+$importe_articulo2;
        echo $campos1[$contador_liena1][0]."----->";
        echo $total_importe."<br>";
        $contador_liena2++;
        $linea_archivo2=fgets($archivo2);
        $campos2[$contador_liena2]=explode("|",$linea_archivo2);
    }
    // solo esta imprimiendo bien los articulos falda, vestido, camisa hace la operacion pero se repiten los articulos al igual de pantalones
    echo $campos1[$contador_liena1][0]."----->";
    echo $campos1[$contador_liena1][2]*$campos1[$contador_liena1][3]."<br>";
    $contador_liena1++;
    $linea_archivo1=fgets($archivo1);
    $contador_liena2=1;
    rewind($archivo2);
}
fclose($archivo1);
fclose($archivo2);
//Para guiarme
// print_r($campos1);
// echo "<hr>";
// print_r($campos2);
// echo count($campos1);
// echo count($campos2);
?>