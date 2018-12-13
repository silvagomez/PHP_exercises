<?php
require_once '../../../../estilo/formato_i.php';
echo<<<html
    <h2>TREN A MODIFICAR</h2>
    <form action="update_tren2.php" method="post">
        <label for="">Introduce el número del tren: <input type="number" name="numero_tren" required> </label>
        <input type="submit" value="Modificar">
    </form>
html;
require_once '../../../../estilo/formato_f.php';
?>