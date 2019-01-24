<?php
session_start(); // crear la sesión ó iniciar
$fechahora = "Este es el primer acceso";
$contador = 0;
if (isset($_SESSION['fechahora'])){
    
    $fechahora = $_SESSION['fechahora'];
    if (isset($_SESSION['contador'])) {
        # code...
        $contador = $_SESSION['contador'];
    }
}

date_default_timezone_set('Europe/Paris');

$_SESSION["fechahora"] = date('d/m/Y h:i:s'); // actualiza la variable
$contador++;

$_SESSION["contador"] = $contador; // actualiza la variable 

?>
<HTML>
    <HEAD>
        <TITLE>Uso de sesiones en PHP </TITLE>
    </HEAD>
    <BODY>
    <H3>Fecha y hora actual: <?php echo date('d/m/Y h:i:s') ?></H3><BR><B>
    Contenido de la superglobal $_SESSION</B><BR>
    <?php 
    echo "Identificador de la sesión " . session_id() . "<BR>";
    echo "Nombre de la sesión " . session_name() . "<BR>";
    echo "Elemento fechahora: " . $_SESSION['fechahora'] . "<BR>" ;
    echo "Elemento contador: " . $_SESSION['contador'] . "<BR><BR>" ;
    echo "<BR>La última vez que accedi󠡠 a esta página fue : $fechahora <BR>"; 
    echo "<BR>Cantidad de accesos a esta página  : $contador <BR>"; 
    unset($_SESSION["contador"]);
    ?> 
    </BODY>
</HTML>