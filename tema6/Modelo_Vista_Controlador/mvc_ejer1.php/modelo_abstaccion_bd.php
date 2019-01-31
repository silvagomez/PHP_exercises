<?php
//NIVEL MODELO ABSTRACCION BD

function crearConexion()
{
    $conexion=mysqli_connect("localhost","root","", "daw");
    return $conexion; 
}

function cerrarConexion($conexion)
{
    mysqli_close($conexion);
}

?>