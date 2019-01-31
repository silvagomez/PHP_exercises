<?php
//NIVEL MODELO
//. Es el encargado de manejar los datos propios de la aplicación. Debe proveer mecanismos para obtener y modificar la información del mismo. Si la aplicación utiliza algún tipo de almacenamiento para su información (como un SGBD), tendrá que encargarse de almacenarla y recuperarla.
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
