<?php
function getConexion()
{
    $host="localhost"; //Servidor
    $user="root";
    $pass="";
    $database="trenes";
    $conection = mysqli_connect($host,$user,$pass,$database) or die("Error en la conexión");
    return $conection;
}
function closeConexion($conection){
    mysqli_close($conection);
}
?>