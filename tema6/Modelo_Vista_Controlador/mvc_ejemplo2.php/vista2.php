<html>
<head>
<title>Listado de Estudiantes</title>
</head>
<body>
<h1>Listado de Estudiantes</h1>
<table>
<tr><th>Nombre</th><th>Telefono</th></tr>
<?php foreach ($est as $estu){ ?>
<tr>
<td><?php echo $estu['nombre'] ?></td>
<td><?php echo $estu['telefono'] ?></td>
</tr>
<?php } ?>

</table>
</body>
</html>
