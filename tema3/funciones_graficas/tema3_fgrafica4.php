<?php
$imagen=imageCreate(200,50);
$amarillo=ImageColorAllocate($imagen,255,255,0);
ImageFill($imagen,0,0,$amarillo);

$verde=ImageColorAllocate($imagen,0,255,0);
$valoraleatorio=rand(100000, 999999); //genera número aleatorio
ImageString($imagen,5,50,20,$valoraleatorio,$verde); //tamaño de la fuente máx.5 y coordenadas c y f

for ($z=0; $z < 4 ; $z++) {
    $x1=rand(0,200);
    $x2=rand(0,200);
    $y1=rand(0,50);
    $y2=rand(0,50);
    imageline($imagen,$x1,$y1,$x2,$y2,$verde);
}

// imageline($imagen,5,5,300,80,$verde);
// imageline($imagen,5,50,300,5,$verde);
// imageline($imagen,5,5,100,50,$verde);
// imageline($imagen,5,50,150,1,$verde);



header ("content-type: image/jpeg");
imageJPEG ($imagen);
imageDestroy($imagen);

?>

<!-- Nota: Esta página solo lleva código PHP no admite la función echo, no puede llevar HTML y el código debe comenzar en la línea 1 columna1 -->
