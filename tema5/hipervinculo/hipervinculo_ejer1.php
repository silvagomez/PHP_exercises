<?php
require_once "../../estilo/formato_i.php";
$conexion=mysqli_connect("localhost", "root", "" , "trenes");
$query=<<<sql
    SELECT * from recorridos
sql;
$registro=mysqli_query($conexion,$query) or die("ERROR: Select");
$recorrido=array();
$contador=1;
while ($reg=mysqli_fetch_array($registro)) {
    $recorrido[$contador] = array('tren'=>$reg['cod_tren'], 'estacion'=>$reg['cod_estacion']);
    $contador++;
}
mysqli_close($conexion);
//--//
// print_r($recorrido);

if (!isset($_REQUEST["menos"]) && !isset($_REQUEST["mas"])) {
    $numero=1;
    echo <<<html
        <p>
            Tren: {$recorrido[$numero]['tren']} <br>
            Estación: {$recorrido[$numero]['estacion']} <br>
        </p>
    -----------------------------------
html;
    $numero++;
    echo <<<html
        <p>
            Tren: {$recorrido[$numero]['tren']} <br>
            Estación: {$recorrido[$numero]['estacion']} <br>
        </p>
html;
    $numero++;
    echo <<<html
        <div>
            <a href="hipervinculo_ejer1.php?mas=$numero" name="next">Siguiente</a>
        </div>
html;
}
else {
    # code...
}
if (isset($_REQUEST["mas"])) {
    $numero=$_REQUEST['num'];
    echo <<<html
        <p>
            Tren: {$recorrido[$numero]['tren']} <br>
            Estación: {$recorrido[$numero]['estacion']} <br>
        </p>
        -----------------------------------
html;
    $numero++;
    echo <<<html
        <p>
            Tren: {$recorrido[$numero]['tren']} <br>
            Estación: {$recorrido[$numero]['estacion']} <br>
        </p>
html;
    $numero++;
    echo <<<html
        <div>
            <a href="hipervinculo_ejer1.php?num=$numero&menos=before">Anterior</a>
            <a href="hipervinculo_ejer1.php?num=$numero&mas=next">Siguiente</a>
        </div>
html;
} else {
    # code...
}
if (isset($_REQUEST["menos"])) {
    $numero=$_REQUEST['num'];
    $numero=$numero-2;
    echo <<<html
        <p>
            Tren: {$recorrido[$numero]['tren']} <br>
            Estación: {$recorrido[$numero]['estacion']} <br>
        </p>
        -----------------------------------
html;
    $numero++;
    echo <<<html
        <p>
            Tren: {$recorrido[$numero]['tren']} <br>
            Estación: {$recorrido[$numero]['estacion']} <br>
        </p>
html;
    $numero++;
    echo <<<html
        <div>
            <a href="hipervinculo_ejer1.php?num=$numero&menos=before">Anterior</a>
            <a href="hipervinculo_ejer1.php?num=$numero&mas=next">Siguiente</a>
        </div>
html;
} else {
    # code...
}

// echo <<<html
// <div>
//     <a href="hipervinculo_ejer1.php?num=$numero&menos=before">Anterior</a>
//     <a href="hipervinculo_ejer1.php?num=$numero&mas=next">Siguiente</a>
// </div>
// html;

require_once "../../estilo/formato_f.php";
?>