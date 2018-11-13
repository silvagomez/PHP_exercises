<?php
$imagen=imageCreate(200,50);
$amarillo=ImageColorAllocate($imagen,255,255,0); //creamos una referencia a un color 255,255,0(RGB)
ImageFill($imagen,0,0,$amarillo); //rellenamos el fondo de la imagen con dicho color.
//0,0 son las coordenadas x, y

header ("content-type: image/jpeg");
imageJPEG ($imagen);
imageDestroy($imagen);
?>

<!-- Nota: Esta página solo lleva código PHP no admite la función echo, no puede llevar HTML y el código debe comenzar en la línea 1 columna1 -->
