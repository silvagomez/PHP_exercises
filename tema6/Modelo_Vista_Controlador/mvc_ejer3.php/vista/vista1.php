<?php
// require_once '../../../../estilo/formato_i.php';

echo<<<html
    <form action="controlador.php" method="post">
        <h2>BIENVENIDO A LA BASE DE DATOS DAW</h2>
        <h3>Seleccione una opción</h3>
        <label><input type="radio" name="radio" id="" value="alta_estudiante"> Alta estudiante</label>
        <br>
        <label><input type="radio" name="radio" id="" value="consultar"> Consultar</label>
        <br>
        <label><input type="radio" name="radio" id="" value="borra_modificar"> Borra - Modificar</label>
        <br>
        <br>
        <input type="submit" name="Aceptar" value="aceptar">
    </form>
html;

// require_once '../../../../estilo/formato_f.php';
?>