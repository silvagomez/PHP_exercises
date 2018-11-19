<?php
echo "Parámetros por referencia <br>";
$cod1=100;
$nombre1="Jon";
$codigo2=200;
$nombre2="Pedro";

metodo1(1.89,70,$cod1,$nombre1,1.90,74,$codigo2,$nombre2);
metodo1(1.89,70,$cod1,$nombre1,1.90,74,$codigo2,$nombre2);
 function metodo1($altura1,$peso1,$codigo1,$nombre1,$altura2,$peso2,&$codigo2,&$nombre2)
 {
    echo "La altura de ".$nombre1." es ".$altura1."<br>";
    echo "La altura de ".$nombre2." es ".$altura2."<br>";
    $nombre1="Begoña";
    $nombre2="Ana";
 }
?>