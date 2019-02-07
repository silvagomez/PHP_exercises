<?php
//Función para insert estudiantes a la bd
function insert_estudiante($nombre, $apellido, $telefono)
{
    $conexion=crear_conexion_PDO("localhost", "daw", "root", "");
    $q=<<<sql
    INSERT INTO estudiante (nombre, apellido, telefono) VALUES (:nombre, :apellido, :telefono)
sql;
    query_insert_db($conexion, $q, $nombre, $apellido, $telefono);
}

//Función para ver todos los estudiantes
function view_estudiante($id_estudiante)
{
    $conexion=crear_conexion_PDO("localhost", "daw", "root", "");

    if ($id_estudiante==null) {
        $q=<<<sql
        SELECT * FROM estudiante
sql;
        $resultado=query_select_db($conexion, $q);
        $estudiante=array();
        while ($fila=fecth_query($resultado)) {
            $estudiante[]=$fila;
        }
        return $estudiante;

    } else {
        $q=<<<sql
        SELECT * FROM estudiante WHERE id = '$id_estudiante' 
sql;
        $resultado=query_select_db($conexion, $q);
        $estudiante=array();
        while ($fila=fecth_query($resultado)) {
            $estudiante[]=$fila;
        }
        return $estudiante;
    }
    
}

//Función para borrar estudiante
function borrar_estudiante($id_estudiante)
{
    $id_estudiante=base64_decode($id_estudiante);
    $conexion=crear_conexion_PDO("localhost", "daw", "root", "");
    $q=<<<sql
    DELETE FROM estudiante WHERE id = :id
sql;
    query_delete_bd($conexion, $q ,$id_estudiante);

}

//Función para obtener los datos estudiante
function datos_estudiante($id_estudiante)
{
    $id_estudiante=base64_decode($id_estudiante);
    $conexion=crear_conexion_PDO("localhost", "daw", "root", "");
    $estudiante=view_estudiante($id_estudiante);
    return $estudiante;
}

//Función para modificar los datos del estudiante
function modificar_datos_estudiante($id, $nombre, $apellido, $telefono)
{
    $conexion=crear_conexion_PDO("localhost", "daw", "root", "");
    $q=<<<sql
    UPDATE estudiante SET nombre = :nombre, apellido = :apellido, telefono = :telefono WHERE id = :id
sql;
    query_update_bd($conexion, $q, $id, $nombre, $apellido, $telefono);
}
?>