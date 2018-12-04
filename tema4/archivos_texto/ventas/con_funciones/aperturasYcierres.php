<?php
function &abrirArchivoCliente()
{
    $archivo_cliente=fopen("../cliente.dat","r") or die("ERROR");
    return $archivo_cliente;
}
function &abrirArchivoVentas()
{
    $archivo_ventas=fopen("../ventas.dat","r") or die("ERROR");
    return $archivo_ventas;
}
function cerrarArchivos(&$ar_cliente,&$ar_ventas)
{
    fclose($ar_cliente);
    fclose($ar_ventas);
}
?>