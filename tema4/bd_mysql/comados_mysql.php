<?php
//Para conectarse a una base de datos
    $host="localhost"; //Servidor
    $user="root"; //Usuario
    $pass=""; //Contraseña
    $database="trenes"; //Nombre de la base de datos
    $conection = mysqli_connect($host,$user,$pass,$database) or die("Error en la conexión");

//Para cerrar la conexión de una base de datos
    mysqli_close($conection);

//Para ejecutar una query y guardarla en una varialble
$registro=mysqli_query($conexion,$query) or die("ERROR");

//Para visualizar la información de una query
while ($reg=mysqli_fetch_array($registro)) {
    echo <<<html
        <p>
        xxxxx: {$reg['nombre_campo_bd']} <br>
        xxxxx: {$reg['nombre_campo_bd']} <br>
        xxxxx: {$reg['nombre_campo_bd']} <br>
        </p>
html;
}
?>