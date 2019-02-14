<?php
require_once 'modelo/modelo_abstraccion_bd.php';
require_once 'modelo/modelo_acceso_datos.php';
//existe ciclo
if (isset($_REQUEST['ciclo'])) {

    $ciclo=$_REQUEST['ciclo'];
    // existe ciclo y var= alta ó baja
    if (isset($_REQUEST['ciclo']) && isset($_REQUEST['var'])) {
        $accion=$_REQUEST['var'];

        // multi alta baja
        if ($ciclo==1 && $accion=="alta" ) {
            require_once 'vista/vista_alta.php';
        }
        if ($ciclo==1 && $accion=="baja" ) {
            require_once 'vista/vista_baja.php';
        }

        // web alta baja
        if ($ciclo==2 && $accion=="alta" ) {
            require_once 'vista/vista_alta.php';
        }
        if ($ciclo==2 && $accion=="baja" ) {
            require_once 'vista/vista_baja.php';
        }

        // turismo alta baja
        if ($ciclo==3 && $accion=="alta" ) {
            require_once 'vista/vista_alta.php';
        }
        if ($ciclo==3 && $accion=="baja" ) {
            require_once 'vista/vista_baja.php';
        }

    } else {
        // vista de alta y baja
        if ($ciclo==1) { //web
            require_once 'vista/vista2.php';
        }
        if ($ciclo==2) { //muti
            require_once 'vista/vista2.php';
        }
        if ($ciclo==3) { //turismo
            require_once 'vista/vista2.php';
        }
    }
    
} else {
    //existe ingresar ó eliminar matricula
    if (isset($_REQUEST['ingresar']) || isset($_REQUEST['eliminar']) ) {
        //vista ingresar matricula
        if (isset($_REQUEST['ingresar'])) {
            alta_estudiante($_REQUEST['dni'], $_REQUEST['nombreAlumno'], $_REQUEST['apellido1'], $_REQUEST['apellido2'], $_REQUEST['direccion'], $_REQUEST['telefono'], $_REQUEST['codCiclo']);
        }
        //vista eliminar matricula
        if (isset($_REQUEST['eliminar'])) {
            baja_estudiante($_REQUEST['dni']);
        } 
    } else {
        // vista principal
        $imagen=imagenes_ciclos();
        // print_r($imagen);
        $ciclos=view_ciclos();
        // print_r($ciclos);
        require_once 'vista/vista1.php';
    }
    
    

}

?>