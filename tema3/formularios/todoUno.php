<html>
  <head>
  <title>Formulario de entrada del dato nombre</title>
  </head>
  <body>
  <?php
  if(!$_GET){
  ?>
<form method="GET" action="todoUno.php">
  Teclea tu nombre:
  <input type="text" name="nombre">
  <br />
  <input type="submit" value="aceptar">
  </form>
  <?php
  }
  else{
   echo "El nombre tecleado es:";
echo $_GET['nombre'];
  }
  ?>
</body>
</html>
