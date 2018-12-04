<?php
require("aperturasYcierres.php");
require("lecturas.php");
$fecha=date('j/n/Y');
$total=0;
$archivo_cliente=abrirArchivoCliente();
$archivo_ventas=abrirArchivoVentas();
$linea_ventas=leerAventas($archivo_ventas);
// print_r($linea_ventas);
while (!feof($archivo_ventas)) {
    $linea_cliente=leerAcliente($archivo_cliente);
    // print_r($linea_cliente);
    while($linea_ventas[0]!=$linea_cliente[0]){
        $linea_cliente=leerAcliente($archivo_cliente);
    }
    echo <<<abc
    <h2>Fecha: $fecha <br>
    Código de cliente: {$linea_cliente[0]} Nombre: {$linea_cliente[1]}</h2>
    <b>Código artículo-----Descripción-----Cantidad-----Precio</b>
    <br>
abc;
    while((!feof($archivo_ventas))&&(!feof($archivo_ventas))&&($linea_ventas[0]==$linea_cliente[0])){
        echo <<<abc
        {$linea_ventas[1]}-----{$linea_ventas[2]}------{$linea_ventas[4]}-----{$linea_ventas[3]}
        <br>
abc;
        $total+=($linea_ventas[4]*$linea_ventas[3]);
    $linea_ventas=leerAventas($archivo_ventas);
    }
    echo <<<abc
    <b>Total factura: $total €</b><br><br>
abc;
    $total=0;
}
cerrarArchivos($archivo_cliente,$archivo_ventas);
?>