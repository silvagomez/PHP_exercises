<H3>MATRICULA</H3><br>
<form action="controlador.php" method="post">
<label>DNI: <input type="text" name="dni" id=""></label><br>
<label>Nombre alumno: <input type="text" name="nombreAlumno" id=""></label><br>
<label>Apellido 1: <input type="text" name="apellido1" id=""></label><br>
<label>Apellido 2: <input type="text" name="apellido2" id=""></label><br>
<label>Direccion: <input type="text" name="direccion" id=""></label><br>
<label>Telefono: <input type="number" name="telefono" id=""></label><br>
<input type="hidden" name="codCiclo" value="<?php echo $ciclo ?>"><br>
<input type="submit" value="INGRESAR" name="ingresar">
</form>