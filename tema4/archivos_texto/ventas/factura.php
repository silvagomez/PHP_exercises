<?php
require_once '../../../estilo/formato_i.php';
$archivo_venta=fopen('ventas.dat', 'r') or die('ERROR: Revisar código');
$archivo_cliente=fopen('cliente.dat','r') or die('ERROR: Revisar código');
$linea_venta=fgets($archivo_venta);
$contador_venta=1;
$contador_cliente=1;
$campo_venta=[];
$campo_cliente=[];
$fecha=date('j/n/Y');
while (!feof($archivo_venta)) {
    $linea_c=fgets($archivo_cliente);
    utf8_encode($linea_venta);
    utf8_encode($linea_c);
    $campo_venta["venta".$contador_venta]=explode("|",$linea_venta);
    $campo_cliente["cliente".$contador_cliente]=explode("|",$linea_c);
//     echo <<<abc
//     {$campo_venta["venta".$contador_venta][0]} {$campo_cliente["cliente".$contador_cliente][0]}
// abc;
    // $contador_cliente=1;
    //-//
    while ($campo_venta["venta".$contador_venta][0] != $campo_cliente["cliente".$contador_cliente][0]) {
        $linea_c=fgets($archivo_cliente);
        $contador_cliente++;
        // $campo_cliente["cliente".$contador_cliente]=explode("|",$linea_c);
        echo "son distintos";
    }
    //--//
    echo <<<abc
    Fecha: $fecha <br>
    Código de cliente: {$campo_cliente["cliente".$contador_cliente][0]} Nombre: {$campo_cliente["cliente".$contador_cliente][1]} <br>
    <p>Código artículo---Descripción---Cantidad---Precio---Importe</p>
abc;
    //-//
    while ((!feof($archivo_venta)) && ($campo_venta["venta".$contador_venta][0] == $campo_cliente["cliente".$contador_cliente][0])) {
        echo <<<abc
        {$campo_venta["venta".$contador_venta][1]}---{$campo_venta["venta".$contador_venta][2]}---{$campo_venta["venta".$contador_venta][4]}---{$campo_venta["venta".$contador_venta][3]}
        <br>
abc;
        $linea_venta=fgets($archivo_venta);
        $contador_venta++; 
    }
    // echo $linea_venta."<br>";
    // $contador_cliente++;
    // $contador_cliente=1;
}
fclose($archivo_venta);
fclose($archivo_cliente);
echo "<br><br>";
print_r($campo_venta);
echo "<br><br>";
print_r($campo_cliente);
require_once '../../../estilo/formato_f.php';
?>