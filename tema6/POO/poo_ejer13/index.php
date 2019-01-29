<?php
require_once "clases/estudiantes.php";
require_once "../../../estilo/formato_i.php";

$student= new Estudiante();

// $student->__construct();

$ar=$student->get_Estudiante();

print_r($ar);

for($i=0; $i<sizeof($ar);$i++){

    echo <<<html

    Identificación: <input type="text" value="{$ar[$i]["id"]}"/>
    <br />
    Nombre Completo: <input type="text" value="{$ar[$i]["nombre"]}"/>
    <br />
    Teléfono: <input type="text" value="{$ar[$i]["telefono"]}"/>
    <br />
    <hr />

html;
}

require_once "../../../estilo/formato_f.php";
?>