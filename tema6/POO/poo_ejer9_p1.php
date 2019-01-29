<?php
require_once "../../estilo/formato_i.php";

interface MiInterfaz{

    public function setNombre($nombre);
    public function setApellido($apellido);
    public function setGenero($genero);
    
    public function getNombre();
    public function getApellido();
    public function getGenero();
    
}

require_once "../../estilo/formato_f.php";
?>