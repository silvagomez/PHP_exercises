<?php
require_once '../../../../estilo/formato_i.php';
require_once '../conexion.php';

function echoQuery($query)
{
echo <<<html
    <p>
    <strong>$query</strong><br>
    </p> 
html;
}

//Los trenes cuya fecha sea mayor al año 2018 se darán de baja de la tabla de trenes y se creara una nueva tabla con dichos trenes
echo<<<html
    <h2>TRENES ANTIGUOS</h2>
    <form action="update_tren_oneforall.php" method="post">
        <label for="">Desea crear la tabla de trenes antiguos</label><br>
        <input type="submit" value="Confirmar" name="tren_antiguo">
    </form>
html;
if (isset($_REQUEST['tren_antiguo'])) {
    $conexion=getConexion();
    // echo "Holi existo<br>";
    $q=<<<sql
    CREATE TABLE trenes_nuevos SELECT * FROM trenes WHERE fecha_compra >= '2018-01-01';
sql;
    $qx=<<<sql
    DELETE FROM trenes WHERE fecha_compra >='2018-01-01'
sql;
    echoQuery($q);
    echoQuery($qx);
    //codigo que confirma si existe ya la tabla creada si existe insertar en la tabla los trenes nuevos, si no crear tabla e insertar 
    $registro=mysqli_query($conexion,$q) or die("ERROR AL CREAR LA TABLA Ó YA ESTÁ CREADA");
    $registrox=mysqli_query($conexion,$qx) or die("ERROR AL ELIMINAR");
    mysqli_close($conexion);
}

//Añadir a la tabla trenes la columna capacidad viajeros sentados
echo<<<html
    <h2>CAPACIDAD VIAJEROS</h2>
    <form action="update_tren_oneforall.php" method="post">
        <label for="">Desea añadir a la tabla de trenes la capacidad de viajeros sentados</label><br>
        <input type="submit" value="Confirmar" name="capacidad">
    </form>
html;
if (isset($_REQUEST['capacidad'])) {
    $conexion=getConexion();
    $q=<<<sql
    ALTER TABLE trenes add capacidad int
sql;
echoQuery($q);
$registro=mysqli_query($conexion,$q) or die("ERROR ALTER TABLE");
    mysqli_close($conexion);
}


//Dar de alta un tren con la fecha de compra de hoy (CURRENT_DATE)
$fecha=date("j-m-y");
echo<<<html
    <h2>AGREGAR TREN</h2>
    <form action="update_tren_oneforall.php" method="post">
        <label>Fecha compra $fecha</label>
        <br>
        <label>KM Recorrido <input type="number" name="km_recorrido" required></label>
        <br>
        <input type="submit" value="Agregar" name="add_tren">
    </form>
html;
if (isset($_REQUEST['add_tren'])) {
    $conexion=getConexion();
    $q=<<<sql
    INSERT INTO trenes(fecha_compra,km_recorridos) VALUES('CURRENT_DATE','{$_REQUEST['km_recorrido']}');
sql;
    echoQuery($q);
mysqli_close($conexion);
}
//Colocar las dos foreign_key de la tabla recorridos
echo<<<html
    <h2>FOREIGN KEYS</h2>
    <form action="update_tren_oneforall.php" method="post">
        <label for="">Las foreign keys ya están creadas</label><br>
        <input type="submit" value="Visualizar" name="fk">
    </form>
html;
if (isset($_REQUEST['fk'])) {
    $conexion=getConexion();
    $q=<<<sql
    ALTER TABLE `recorridos` ADD CONSTRAINT `fk_cod_estacion` FOREIGN KEY (`cod_estacion`) REFERENCES `estaciones` (`cod_estacion`) ON DELETE CASCADE ON UPDATE CASCADE, ADD CONSTRAINT `fk_cod_tren` FOREIGN KEY (`cod_tren`) REFERENCES `trenes` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE
sql;
    echoQuery($q);
    mysqli_close($conexion);
}

//Nombre y población de las estaciones por las que pasan más de tres trenes
echo<<<html
    <h2>Nombre y población de las estaciones por las que pasan más de tres trenes</h2>
    <form action="update_tren_oneforall.php" method="post">
        <input type="submit" value="Visualizar" name="view_trenes">
    </form>
html;
if (isset($_REQUEST['view_trenes'])) {
    $conexion=getConexion();
    $q=<<<sql
    SELECT estaciones.nombre, estaciones.poblacion FROM trenes, estaciones, recorridos WHERE trenes.numero=recorridos.cod_tren AND estaciones.cod_estacion=recorridos.cod_estacion HAVING COUNT(estaciones.nombre)>=3 
sql;
    echoQuery($q);
    $registro=mysqli_query($conexion,$q) or die("ERROR de select");
    while($reg=mysqli_fetch_array($registro)){
        echo<<<html
        <p>
        Resultado: {$reg['nombre']} {$reg['poblacion']}
        </p>
html;
    }
    mysqli_close($conexion);
}

//Nombre y población de las estaciones que no pasan trenes
echo<<<html
    <h2>Nombre y población de las estaciones que no pasan trenes</h2>
    <form action="update_tren_oneforall.php" method="post">
        <input type="submit" value="Visualizar" name="view_esta">
    </form>
html;
if (isset($_REQUEST['view_esta'])) {
    $conexion=getConexion();
    $q=<<<sql
    SELECT estaciones.nombre, estaciones.poblacion from estaciones WHERE estaciones.cod_estacion NOT IN (SELECT recorridos.cod_estacion from recorridos , trenes, estaciones WHERE recorridos.cod_tren=trenes.numero AND estaciones.cod_estacion=recorridos.cod_estacion)
sql;
    echoQuery($q);
    $registro=mysqli_query($conexion,$q) or die("ERROR de select");
    while($reg=mysqli_fetch_array($registro)){
        echo<<<html
        <p>
        Resultado: {$reg['nombre']} {$reg['poblacion']}
        </p>
html;
    }
    mysqli_close($conexion);
}



require_once '../../../../estilo/formato_f.php';
?>