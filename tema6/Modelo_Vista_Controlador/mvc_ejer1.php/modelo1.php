<?php
//NIVEL MODELO
function getTodosLosEstudiantes(){
    $conexion=mysqli_connect("localhost","root","", "daw"); 
    $resultado = mysqli_query($conexion,'SELECT nombre, telefono FROM estudiante');
    // crear el array de elementos para la capa de la vista
    $est=array();
    while ($fila = mysqli_fetch_array($resultado)){
        $est[]=$fila;
        
    }
    mysqli_close($conexion);
    return $est;
}
?>
