<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert title here</title>
</head>
<body
<?php if (isset($_COOKIE['colores']))  echo " bgcolor=\"$_COOKIE[colores]\"" 
?>
>
<form action="cookie4.php" method="post">
Seleccione de que color desea que sea la página :<br />
<input type="radio" value="rojo" name="radio">Rojo<br />
<input type="radio" value="verde" name="radio">Verde<br />
<input type="radio" value="azul" name="radio">Azul<br />

<input type="submit" value="Crear cookie">
</form>
</body>
</html>
