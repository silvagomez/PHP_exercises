<?php
function crear_conexion($host, $data_base, $user, $password)
{
    try {
        return $conexion = new PDO('mysql:host='.$host.';dbname='.$data_base, $user, $password);
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function query_select_db($conexion,$q)
{
    $resultado=$conexion->prepare($q);
    $resultado->execute();
    return $resultado;
}

function fetch_query($resultado){
    return $resultado->fetch();
}

function query_insert_db($conexion, $query, $dni, $nombreAlumno, $apellido1, $apellido2, $direccion, $telefono, $codCiclo)
{
    $resultado = $conexion->prepare($query);
    $rows = $resultado->execute(array(':dni'=>$dni, ':nombreAlumno'=>$nombreAlumno, ':apellido1'=>$apellido1, ':apellido2'=>$apellido2, ':direccion'=>$direccion, ':telefono'=>$telefono, ':codCiclo'=>$codCiclo));
    if ($rows==1) {
        echo "Insert OK";
        echo<<<html
        <br>
        <a href="controlador.php"><input type="button" value="Volver"></a>
html;
    }else {
        echo "Error";
    }
}

function query_delete_db($conexion,$query,$dni)
{
    $resultado = $conexion->prepare($query);
    $rows = $resultado->execute(array(':dni'=>$dni));
    if ($rows==1) {
        echo "Delete OK";
        echo<<<html
        <br>
        <a href="controlador.php"><input type="button" value="Volver"></a>
html;
    }else {
        echo "Error";
    }
}

?>
