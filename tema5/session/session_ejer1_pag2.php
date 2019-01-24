<?php
session_start();
require_once "../../estilo/formato_i.php";

$mail=$_REQUEST['correo'];

$conexion=mysqli_connect('localhost', 'root', '', 'daw');
$q=<<<sql
    SELECT nombre from alumnos where mail = '$mail';
sql;

$registro=mysqli_query($conexion,$q) or die("error");
if (mysqli_num_rows($registro)>0) {
    $reg=mysqli_fetch_array($registro);
    $_SESSION['nombre']=$reg['nombre'];
 } else {
     # code...
}
echo<<<html
        <a href="session_ejer1_pag3.php">Continuar</a>
html;


mysqli_close($conexion);

require_once "../../estilo/formato_f.php";
?>