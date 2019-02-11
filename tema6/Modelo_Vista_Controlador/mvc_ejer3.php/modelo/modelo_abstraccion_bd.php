<?php
//Función conectarse a la base de datos
function crear_conexion_PDO($host, $data_base, $user, $password)
{
    try {
        return $conexion = new PDO('mysql:host='.$host.';dbname='.$data_base, $user, $password);
    } catch (PDOException $e) {
        $error='Error conectando con la base de datos: ' . $e->getMessage();
        return $error;
    }
}

//Función para insertar un estudiante a la base de datos
function query_insert_db($conexion, $query, $nombre, $apellido, $telefono)
{
    $resultado = $conexion->prepare($query);
    $rows = $resultado->execute(array(':nombre'=>$nombre, ':apellido'=>$apellido, ':telefono'=>$telefono));
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

//Función para realizar una select a la base de datos
function query_select_db($conexion, $query)
{
    $resultado = $conexion->prepare($query);
    $resultado->execute();
    return $resultado;
}

//Función para realizar el fetch_array de los datos de la petición a la base de datos
function fecth_query($resultado)
{
    return $resultado->fetch();
}

//Función para realizar un delete a la base de datos
function query_delete_bd($conexion, $query, $id)
{
    $resultado = $conexion->prepare($query);
    $rows = $resultado->execute(array(':id'=>$id));
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

//Función para realizar un update a la base de datos
function query_update_bd($conexion, $query, $id, $nombre, $apellido, $telefono)
{
    $resultado = $conexion->prepare($query);
    $rows = $resultado->execute(array(':id'=>$id, ':nombre'=>$nombre, ':apellido'=>$apellido, ':telefono'=>$telefono));
    if ($rows==1) {
        echo "Update OK";
        echo<<<html
        <br>
        <a href="controlador.php"><input type="button" value="Volver"></a>
html;
    }else {
        echo "Error";
    }
}
?>