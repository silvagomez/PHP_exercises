<?php
require_once '../../../estilo/formato_i.php';
if (!isset($_REQUEST['aceptar'])) {
    require_once 'vista/vista1.php';
} else {
    require_once 'vista/vista2.php';
}
require_once '../../../estilo/formato_f.php';
?>