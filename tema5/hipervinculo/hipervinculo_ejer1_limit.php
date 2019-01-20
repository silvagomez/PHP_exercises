<?php
require_once "../../estilo/formato_i.php";

if (isset($_REQUEST['var_inicio'])) {
    $inicio=$_REQUEST['var_inicio'];
} else {
    $inicio=0;
}

$conexion=mysqli_connect("localhost", "root", "" , "trenes");
$query=<<<sql
    SELECT * from recorridos limit $inicio,2;
sql;
$registro=mysqli_query($conexion,$query) or die("ERROR: Select");
while ($reg=mysqli_fetch_array($registro)) {
    
    echo <<<html
    <p>
    Tren: {$reg['cod_tren']}<br>
    Estación: {$reg['cod_estacion']}
    </p>
html;
}

$query2=<<<sql
    SELECT * from recorridos
sql;
$query_total=mysqli_query($conexion,$query2) or die("ERROR");
$total_reg=mysqli_num_rows($query_total);
mysqli_close($conexion);

if ($inicio==0) {
    $x=$inicio+2;
    echo "Anterior ";
    echo <<<html
    <a href="hipervinculo_ejer1_limit.php?var_inicio={$x}">Siguiente</a>
html;
} else {
    $y=$inicio-2;
    echo <<<html
    <a href="hipervinculo_ejer1_limit.php?var_inicio={$y}">Anterior</a>
html;
    if ($inicio<$total_reg-2) {
        $x=$inicio+2;
    echo <<<html
    <a href="hipervinculo_ejer1_limit.php?var_inicio={$x}">Siguiente</a>
html;
    } else {
        echo "Siguiente ";
    }
    
}


require_once "../../estilo/formato_f.php";
?>