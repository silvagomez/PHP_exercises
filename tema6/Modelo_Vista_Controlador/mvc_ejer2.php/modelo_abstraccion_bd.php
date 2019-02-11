<?php
//NIVEL MODELO ABSTRACCION BD

function crearConexion($host, $user, $password, $data_base)
{
    $conexion=mysqli_connect($host, $user, $password, $data_base) or die ("ERROR conexion bd");
    return $conexion; 
}

function cerrarConexion($conexion)
{
    mysqli_close($conexion);
}

function selectEstudiantes($conexion, $query)
{
    $resultado = mysqli_query($conexion, $query) or die ("ERROR query");
    return $resultado;
}

function fecthResultado($resultado)
{
    return mysqli_fetch_array($resultado);
}
?>

