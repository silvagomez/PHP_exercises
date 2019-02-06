<?php
//NIVEL MODELO ABSTRACCION BD

function crearConexion()
{
    $conexion=mysqli_connect("localhost","root","", "daw") or die ("ERROR conexion bd");
    return $conexion; 
}

function cerrarConexion($conexion)
{
    mysqli_close($conexion);
}

function getTodosLosEstudiantes($conexion){
    $resultado = mysqli_query($conexion,'SELECT nombre, telefono FROM estudiante') or die ("ERROR query");
    // crear el array de elementos para la capa de la vista
    $est=array();
    while ($fila = mysqli_fetch_array($resultado)){
        $est[]=$fila;
    }
    return $est;
}

//También se podría dividir la función getTodosLosEstudiantes en dos, una para la select y otro para el fetch_array
function selectEstudiantes($conexion)
{
    $resultado = mysqli_query($conexion,'SELECT nombre, telefono FROM estudiante') or die ("ERROR query");
    return $resultado;
}

function fecthResultado($resultado)
{
    while ($fila = mysqli_fetch_array($resultado)){
        $est[]=$fila;
    }
    return $est;
}
?>