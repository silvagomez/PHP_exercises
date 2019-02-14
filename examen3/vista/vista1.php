<h1>CICLOS FORMATIVOS</h1>

<?php

//CODIGO ANTES DE TENER IMÁGENES
// foreach ($ciclos as $key => $value) {
// echo<<<html
//     <a href="controlador.php?ciclo={$value['codCiclo']}">{$value['nombreCiclo']}</a><br><br>
// html;
// }

for ($x=0; $x <= 2; $x++) { 
    echo<<<html
    <img src="{$imagen[$x]}" alt="">-<a href="controlador.php?ciclo={$ciclos[$x]['codCiclo']}">{$ciclos[$x]['nombreCiclo']}</a><br><br>
html;
}
?>