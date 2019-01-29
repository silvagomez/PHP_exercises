<?php
require_once "../../estilo/formato_i.php";
require_once "poo_ejer9_p1.php";

class Persona implements MiInterfaz
{
    private $nombre;
    private $apellido;
    private $genero;

    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido=$apellido;
    }
    public function setGenero($genero)
    {
        $this->genero=$genero;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    
}


require_once "../../estilo/formato_f.php";
?>