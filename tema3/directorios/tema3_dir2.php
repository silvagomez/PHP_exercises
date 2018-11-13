<?php
$directorio="mis_apuntes";
function eliminar($directorio){
    foreach (glob($directorio."/*.*") as $value) {
        if (is_dir($value)) {
            echo $value;
            eliminar($value);
        }else {
            echo $value;
            unlink($value);
        }
    }
    rmdir($directorio);
}
eliminar($directorio);
?>
