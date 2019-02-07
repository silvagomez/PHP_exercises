<?php
if ($_REQUEST['radio']=="alta_estudiante") {
    echo<<<html
    <form action="controlador.php" method="post">
        <h3>ALTA ESTUDIANTE</h3>
        <label>Nombre: <input type="text" name="nombre" id=""></label>
        <br>
        <label>Apellido: <input type="text" name="apellido" id=""></label>
        <br>
        <label>Teléfono: <input type="number" name="telefono" id=""></label>
        <br>
        <br>
        <input type="submit" value="Insertar" name="insertar">
        <a href="controlador.php"><input type="button" value="Volver"></a>
    </form>
html;
}else {
    # code...
}

if ($_REQUEST['radio']=="consultar") {
    echo<<<html
    <form action="controlador.php" method="post">
        <h3>CONSULTAR ID ESTUDIANTE</h3>
        <label>ID: <input type="number" name="id_estudiante1" id=""></label>
        <br>
        <br>
        <input type="submit" value="Consultar" name="consultar">
        <a href="controlador.php"><input type="button" value="Volver"></a>
    </form>
html;
} else {
    # code...
}

if ($_REQUEST['radio']=="borrar_modificar") {
    echo<<<html
    <form action="controlador.php" method="post">
        <h3>BORRAR O MODIFICAR ESTUDIANTE</h3>
        <label>ID: <input type="number" name="id_estudiante2" id=""></label>
        <br>
        <br>
        <input type="submit" value="Borra - Modificar" name="borrar_modificar">
        <a href="controlador.php"><input type="button" value="Volver"></a>
    </form>
html;
} else {
    # code...
}


?>