<!Doctype html>
<html>
<head><title>Prueba</title></head>
<body>
<?php
$var = 20; /* variable global */
function PruebaSinGlobal()
{
    $var++;
	echo "Prueba sin global. \$var  :". $var . "<BR>";
	}
function PruebaConGlobal()
{
    global $var;
	$var++;
	echo "Prueba con global. \$var  :". $var . "<BR>";
	}
function PruebaConGlobals()
{
    $GLOBALS["var"]++;
	echo "Prueba Con GLOBALS. \$var  :". $GLOBALS["var"] . "<BR>"; 	}

PruebaSinGlobal();
PruebaConGlobal();
PruebaConGlobals();
?>
<?php
$var=`dir`; //apóstrofo invertido (donde está el [^)
echo "<pre>$var</pre>";
?>

</body>
</html>
