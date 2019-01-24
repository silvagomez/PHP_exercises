<?php
require_once "../../estilo/formato_i.php";

echo<<<html
<form action="session_ejer1_pag2.php" method="post">
<label for="">Ingrese un mail <input type="email" name="correo" id=""></label>
<input type="submit" value="Ingresar">
</form>
html;

require_once "../../estilo/formato_f.php";
?>