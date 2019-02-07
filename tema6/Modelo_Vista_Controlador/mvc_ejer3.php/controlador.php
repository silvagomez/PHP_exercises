<?php
//Base de datos
require_once 'modelo/modelo_abstraccion_bd.php';
require_once 'modelo/modelo_acceso_datos.php';
//Estilo inicial
require_once '../../../estilo/formato_i.php';
//Vistas - Lógica
if (!isset($_REQUEST['aceptar'])) {

    if (isset($_REQUEST['insertar']) || 
        isset($_REQUEST['consultar']) || 
        isset($_REQUEST['borrar_modificar']) ||
        isset($_REQUEST['borrar']) ||
        isset($_REQUEST['modificar']) ||
        isset($_REQUEST['actualizar']) ) {

        // si existe insertar
        if (isset($_REQUEST['insertar'])) {
            insert_estudiante($_REQUEST['nombre'], $_REQUEST['apellido'], $_REQUEST['telefono']);
        }
        // si existe consultar
        if (isset($_REQUEST['consultar'])) {
            $estudiante=view_estudiante($_REQUEST['id_estudiante1']);
            require_once 'vista/vista_select.php';
        }
        // si existe borrar_modificar
        if (isset($_REQUEST['borrar_modificar'])) {
            $estudiante=view_estudiante($_REQUEST['id_estudiante2']);
            require_once 'vista/vista_borrar_modificar.php';
        }
        // si existe borrar
        if (isset($_REQUEST['borrar'])) {
            borrar_estudiante($_REQUEST['borrar']);
        }
        // si existe modificar
        if (isset($_REQUEST['modificar'])) {
            $estudiante=datos_estudiante($_REQUEST['modificar']);
            require_once 'vista/vista_modificar.php';
        }
        //si existe actualizar
        if (isset($_REQUEST['actualizar'])) {
            // print_r($_REQUEST);
            modificar_datos_estudiante($_REQUEST['id'], $_REQUEST['nombre'], $_REQUEST['apellido'], $_REQUEST['telefono']);
        }
        
    } else {
        // si no existe aceptar y ninguno anterior
        require_once 'vista/vista1.php'; 
    }

} else {
    require_once 'vista/vista2.php';   
}

//Estilo final
require_once '../../../estilo/formato_f.php';
?>