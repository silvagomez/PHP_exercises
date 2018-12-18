<?php
require_once '../../../estilo/formato_i.php';

if(!$_REQUEST){
    echo "ERROR no sé por que";
}
else{
    $codigo_articulo=$_REQUEST['cod_art'];
    $despricion=$_REQUEST['desc'];
    $existencia=$_REQUEST['exist'];
    $stock_min=$_REQUEST['min'];
    $codigo_proveedor=$_REQUEST['cod_prov'];
    $marca=$_REQUEST['marca'];
    
}

require_once '../../../estilo/formato_f.php';
?>