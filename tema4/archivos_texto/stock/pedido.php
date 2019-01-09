<?php
require_once '../../../estilo/formato_i.php';
$archivo_articulos=@fopen("articulos.txt","r");
$archivo_proveedores=@fopen("proveedores.txt","r");
$archivo_pedidos=@fopen("pedidos.txt","w");
$linea_articulo=fgets($archivo_articulos);
$contador_articulo=1;
$marca="registro";
while(!feof($archivo_articulos)){
    $registros_articulos[$contador_articulo]=explode("|",$linea_articulo);
    if($registros_articulos[$contador_articulo][5]=="registro") {
       echo "holi<br>";
       if ($registros_articulos[$contador_articulo][2]<$registros_articulos[$contador_articulo][3]) {
            echo<<<html
            {$registros_articulos[$contador_articulo][1]} fuera de stock hacer pedido <br>
html;
       } else {
           # code...
       }
        $contador_articulo++;
        $linea_articulo=fgets($archivo_articulos);
    }else {
        echo "nulo<br>";
        $contador_articulo++;
        $linea_articulo=fgets($archivo_articulos);
    }
    
    
}
fclose($archivo_articulos);
fclose($archivo_proveedores);
fclose($archivo_pedidos);
print_r($registros_articulos);

require_once '../../../estilo/formato_f.php';
?>