<?php
$archivo=fopen("datos01.txt","a") or die("Problemas en la creacion"); // "a" es para escribir
fwrite($archivo,$_POST['nombre']); // se guarda en archivo el nombre del formulario
fwrite($archivo, "<br/>");
fwrite($archivo,$_POST['telefono']); // se guarda en archivo el teléfono del formulario
fwrite($archivo,"<br/>");
fwrite($archivo,"--------------------------------------------------------");
fwrite($archivo,"<br/>");
fclose($archivo);
echo "Los datos se guardaron correctamente.";
?>
