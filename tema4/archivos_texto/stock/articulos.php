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

    $archivo=@fopen("articulos.txt","r+") or die("ERROR al abrir el archivo");
    $inicio=($codigo_articulo-1)*40; // Decimos que cada requistro tiene una longitud de 40 carácteres
    fseek($archivo,$inicio,SEEK_SET);
    fwrite($archivo, $codigo_articulo."|".$despricion."|".$existencia."|".$stock_min."|".$codigo_proveedor."|".$marca."|".PHP_EOL);
    fclose($archivo);
    echo <<<html
    <p>
    Artículo guardado exitosamente.
    </p>
    <a href="stock.html">Volver</a> <br>
    <a href="view_articulos.php">Ver artículos</a>
html;
}
require_once '../../../estilo/formato_f.php';
?>