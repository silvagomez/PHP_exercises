<html>
<head>
<title> P O O </title>
<meta  charset="utf-8" />
</head>
<body>
<?php
// Interfaces.- Un interface es como una clase vacía que solamente contiene cabeceras de métodos (siempre públicos), también puede contener constantes pero no variables.
interface MiInterfaz{
    public function visualizar();
}

// Si queremos asegurarnos que una clase contenga un método concreto crearemos una interface.
// Una clase sólo puede heredar de una clase, mientras que en una misma clase se pueden implementar varias interfaces.

class MiClase implements MiInterfaz{
}

// Separados por comas podemos poner más interfaces.
// Un interface también puede heredar de otro interface con la palabra extends. 

    
?>
</body>
</html>