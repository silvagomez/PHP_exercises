<?php
require_once "../../estilo/formato_i.php";
require_once "poo_ejer9_p2.php";

$persona1=new Persona();
$persona1->setNombre("Diego");
$persona1->setApellido("Silva");
$persona1->setGenero("Hombre");

echo "Mi nombre es: ".$persona1->getNombre()."<br>";
echo "Género: ".$persona1->getGenero()."<br>";

//con heredoc
echo <<<abc
<p>
Con heredoc <br>
Mi nombre es {$persona1->getNombre()} {$persona1->getApellido()} <br>
Género: {$persona1->getGenero()}
</p>
abc;

require_once "../../estilo/formato_f.php";
?>