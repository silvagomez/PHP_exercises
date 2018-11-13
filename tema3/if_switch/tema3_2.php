<html>

<head>
<title>Navidad</title>
</head>
<body>
	<!--Inicializar 3 variables, si todos son iguales visualizar la suma del primero con el segundo
  y a este resultado se le multiplica por el tercero-->
<?php

$var1=24;
$var2=24;
$var3=24;


if($var1==$var2 && $var2==$var3){
	$resul=($var1+$var2);
	echo $resul;echo "<br>";
	$resul=$resul*$var3;
	echo $resul;echo "<br>";
	echo<<<abc
		Los valores son iguales<br>
		($var1+$var2)*$var3 <br>
		$resul
abc;
}

?>
</body>
</html>
