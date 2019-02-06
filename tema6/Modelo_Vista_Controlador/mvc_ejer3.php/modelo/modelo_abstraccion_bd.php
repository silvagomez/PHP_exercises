<?php
function crear_conexion($host, $user, $password, $data_base)
{
    $conexion=mysqli_connect($host, $user, $password, $data_base) or die ("ERROR conexion bd");
    return $conexion; 
}

function cerrar_conexion($conexion)
{
    
}
?>