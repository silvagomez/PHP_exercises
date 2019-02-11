<form action="controlador.php" method="post">
    <?php foreach ($estudiante as $student) {?>
        <h3>DATOS DEL ESTUDIANTE</h3>
        <input type="hidden" name="id" value="<?php echo $student['id'] ?>">
        <label>Nombre: <input type="text" name="nombre" id="" value="<?php echo $student['nombre'] ?>"></label>
        <br>
        <label>Apellido: <input type="text" name="apellido" id="" value="<?php echo $student['apellido'] ?>"></label>
        <br>
        <label>Teléfono: <input type="number" name="telefono" id="" value="<?php echo $student['telefono'] ?>"></label>
        <br>
        <br>
        <input type="submit" value="Actualizar" name="actualizar">
        <a href="controlador.php"><input type="button" value="Volver"></a>
    <?php } ?>
    </form>