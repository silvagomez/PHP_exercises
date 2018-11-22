<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
    $TABLA = 4;
    $num=0;

    function Potencia($base, $exponente,&$resultado)
    {
        $resultado = $base**$exponente;
    }

    echo "<table border = 1px>";
    for ($x=1; $x <=$TABLA ; $x++) { 
        echo "<tr>";
        for ($y=0; $y <=$TABLA ; $y++) { 
            Potencia($x,$y,$num);
            echo "<td>".$num."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
    
</body>
</html>