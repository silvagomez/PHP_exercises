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
$total=0;
while ((!feof($archivo_venta)) && (!feof($archivo_cliente))) { // pregunta sí no es fin de fichero
    $linea_cliente=fgets($archivo_cliente);
    utf8_encode($linea_venta);
    utf8_encode($linea_cliente);
    //-//
    while ((substr($linea_venta,0,3))!=(substr($linea_cliente,0,3))) { // pregunto por los tres primero carácteres
        $linea_cliente=fgets($archivo_cliente);
    }
    // echo substr($linea_venta,0,3)."<br>"; // para comprobar en que código iba el programa
    // echo substr($linea_cliente,0,3)."<br>"; // para comprobar en que código iba el programa
    $campo_cliente["cliente".$contador_cliente]=explode("|",$linea_cliente); // hago un explode para que esa linea_cliente se vuelva un array y se alamcene dentro del array campo_cliente ->OJO ES BIDIMENSIONAL
    //--//
    //Imprimo la info necesaria del array bidimesional campo_cliente
    echo <<<abc
    <h2>Fecha: $fecha <br>
    Código de cliente: {$campo_cliente["cliente".$contador_cliente][0]} Nombre: {$campo_cliente["cliente".$contador_cliente][1]}</h2>
    <b>Código artículo-----Descripción-----Cantidad-----Precio</b>
abc;
    //-//
    while ((!feof($archivo_venta)) && (!feof($archivo_cliente)) && (substr($linea_venta,0,3))==(substr($linea_cliente,0,3))) { // sí no es fin de ficheros y sí los códigos son iguales
        $campo_venta["venta".$contador_venta]=explode("|",$linea_venta); // hago un explode para que esa linea_venta se vuelva un array y se alamcene dentro del array campo_venta ->OJO ES BIDIMENSIONAL
        //Imprimo la info necesaria del array bidimesional campo_venta
        echo <<<abc
        {$campo_venta["venta".$contador_venta][1]}-----{$campo_venta["venta".$contador_venta][2]}-----{$campo_venta["venta".$contador_venta][4]}-----{$campo_venta["venta".$contador_venta][3]}
        <br>
abc;
        $total+=($campo_venta["venta".$contador_venta][3]*$campo_venta["venta".$contador_venta][4]); // voy sumando los precios que los multiplica por la cantidad
        $linea_venta=fgets($archivo_venta);
        $contador_venta++; 
    }
    echo <<<abc
    <b>Total factura: $total €</b><br><br>
abc;
    $total=0;
    $contador_cliente++;
}
fclose($archivo_venta);
fclose($archivo_cliente);
echo "<br>";
// print_r($campo_venta);
echo "<br>";
// print_r($campo_cliente);
require_once '../../../estilo/formato_f.php';
?>