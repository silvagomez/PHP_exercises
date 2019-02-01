<?php
//NIVEL MODELO ACCESO DATOS
require_once 'modelo_abstraccion_bd.php';

function getTodosLosEstudiantes(){
    $con=crearConexion(); 
    $resultado = mysqli_query($con,'SELECT nombre, telefono FROM estudiante');
    // crear el array de elementos para la capa de la vista
    $est=array();
    while ($fila = mysqli_fetch_array($resultado)){
        $est[]=$fila;
        
    }
    cerrarConexion($con);
    return $est;
}

?>