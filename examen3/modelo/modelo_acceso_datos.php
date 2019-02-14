<?php
function view_ciclos(){
    $conexion=crear_conexion("localhost","colegio","root","");
    $q=<<<sql
    SELECT * FROM ciclos
sql;
    $resultado=query_select_db($conexion,$q);
    $ciclos=array();
    while ($datos=fetch_query($resultado)) {
        $ciclos[]=$datos;
    }
    return $ciclos;
}

function imagenes_ciclos()
{
  return $imagenes = array("img/img1.png", "img/img2.png" , "img/img3.png" );
}

function alta_estudiante($dni, $nombreAlumno, $apellido1, $apellido2, $direccion, $telefono, $codCiclo){
    $conexion=crear_conexion("localhost","colegio","root","");
    $q=<<<sql
    INSERT INTO alumnos (dni, nombreAlumno, apellido1, apellido2, direccion, telefono, codCiclo) VALUES (:dni,:nombreAlumno, :apellido1, :apellido2, :direccion, :telefono, :codCiclo )
sql;
    $resultado=query_insert_db($conexion, $q, $dni, $nombreAlumno, $apellido1, $apellido2, $direccion, $telefono, $codCiclo);
}

function baja_estudiante($dni){
    $conexion=crear_conexion("localhost","colegio","root","");
    $q=<<<sql
    DELETE FROM alumnos WHERE dni = :dni
sql;
    $resultado=query_delete_db($conexion,$q,$dni);
}
?>

