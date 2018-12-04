<?php
function leerAcliente(&$archivo_cliente)
{
    $linea=fgets($archivo_cliente);
    $linea_cliente=explode("|",$linea);
    return $linea_cliente; // debe ser array
}
function leerAventas(&$archivo_ventas)
{
    $linea=fgets($archivo_ventas);
    $linea_ventas=explode("|",$linea);
    return $linea_ventas; // debe ser array
}
?>