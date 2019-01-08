<?php
// funciones de volcado de variables 

$ar = array('España' => 'Madrid',
            'Francia' => 'París',
            'Reino Unido' => 'Londres');

print "<BR><BR><B>Matriz vista por print_r </B><BR>";
print_r ($ar);

print "<BR><BR><B>Matriz vista por var_dump() </B><BR>";
var_dump($ar);

?>
