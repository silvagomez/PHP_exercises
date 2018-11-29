<?php
echo "<b>Visualizar los pedidos desde el 10 hasta el 13 de forma directa </b><br><br>";
$ruta="pedido01.txt";
$archivo = @fopen($ruta, "r") or die("ERROR: No existe el archivo");
$inicio=(10-1)*31; // cada registro ocupa 29 caracteres + 2 del ENTER= 31. //(numeroFila-1)*31
while($inicio<((14-1)*31)){
fseek($archivo,$inicio,SEEK_SET); 
$linea=fgets($archivo);
echo $linea."<br>";
$inicio=$inicio+31;
}
fclose($archivo);
?>