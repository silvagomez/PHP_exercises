<?php
//NIVEL MODELO ACCESO DATOS
function getTodosLosEstudiantes(){
    $conexion=crearConexion("localhost","root","", "daw");
    $query=<<<sql
        SELECT nombre, telefono FROM estudiante
sql;
    $resultado=selectEstudiantes($conexion, $query);
    $est=array();
    while ($fila = fecthResultado($resultado)){
        $est[]=$fila;
    }
    cerrarConexion($conexion);
    return $est;
    
}
?>