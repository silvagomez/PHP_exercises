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
    </form>
html;
}else {
    # code...
}

if ($_REQUEST['radio']=="consultar") {
    echo<<<html
    <form action="controlador.php" method="post">
        <h3>CONSULTAR ID ESTUDIANTE</h3>
        <label>ID: <input type="number" name="id_estudiante" id=""></label>
        <br>
        <br>
        <input type="submit" value="Consultar" name="consultar">
    </form>
html;
html;
} else {
    # code...
}

if ($_REQUEST['radio']=="borrar_modificar") {
    echo<<<html
html;
} else {
    # code...
}


?>