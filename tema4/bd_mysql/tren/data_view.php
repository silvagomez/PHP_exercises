<?php
require_once '../../../estilo/formato_i.php';
require_once 'conexion.php';
$conexion=getConexion();

//Visualizar de cada tren: numero y fecha de compra.
$q= <<<sql
    SELECT * FROM trenes 
sql;
echo <<<html
    <p>
    <strong>$q</strong><br>
    </p> 
html;
$registro=mysqli_query($conexion,$q) or die("ERROR");
while ($reg=mysqli_fetch_array($registro)) {
    echo <<<html
        <p>
        Número de tren: {$reg['numero']} <br>
        Fecha de compra: {$reg['fecha_compra']} <br>
        Km recorridos: {$reg['km_recorridos']} <br>
        </p>
html;
}

//Visualizar de cada estación de Bogotá: código de la estación y nombre de la estación.
$q= <<<sql
    SELECT * FROM estaciones WHERE poblacion='Bogotá'; 
sql;
echo <<<html
    <p>
    <strong>$q</strong><br>
    </p> 
html;
$registro=mysqli_query($conexion,$q) or die("ERROR");
while ($reg=mysqli_fetch_array($registro)) {
    echo <<<html
        <p>
        Codigo estación: {$reg['cod_estacion']} <br>
        Nombre estación: {$reg['nombre']} <br>
        Población: {$reg['poblacion']} <br>
        </p>
html;
}

//Visualizar cuántas estaciones tiene Bogotá.
$q= <<<sql
    SELECT count(*) as total FROM estaciones WHERE poblacion='Bogotá'; 
sql;
echo <<<html
    <p>
    <strong>$q</strong><br>
    </p> 
html;
$registro=mysqli_query($conexion,$q) or die("ERROR");
$reg=mysqli_fetch_array($registro);
echo <<<html
    <p>
    Total de estación: {$reg['total']} <br>
    </p>
html;

//Visualizar por cada recorrido nombre de la estación, numero de tren y fecha de compra del tren

$q=<<<sql
    SELECT trenes.numero, trenes.fecha_compra, estaciones.nombre FROM trenes, estaciones, recorridos WHERE trenes.numero=recorridos.cod_tren AND estaciones.cod_estacion=recorridos.cod_estacion GROUP BY trenes.numero, trenes.fecha_compra, estaciones.nombre
sql;
echo <<<html
    <p>
    <strong>$q</strong><br>
    </p> 
html;
$registro=mysqli_query($conexion,$q) or die("ERROR");
while ($reg=mysqli_fetch_array($registro)) {
    echo <<<html
        <p>
        Codigo tren: {$reg['numero']} <br>
        Fecha compra: {$reg['fecha_compra']} <br>
        Nombre estación: {$reg['nombre']} <br>
        </p>
html;
}


closeConexion($conexion);
require_once '../../../estilo/formato_f.php'
?>