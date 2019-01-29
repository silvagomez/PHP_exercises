<?php
class Conectar
{
    public static function conexion()
    {
        $conexion=mysqli_connect("localhost","root","", "daw") or die("Error en la conexion");;
        return $conexion;
    }
}

?>