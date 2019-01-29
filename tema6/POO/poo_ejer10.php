<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
    
    <?php   
    $conexion=mysqli_connect("localhost","root","", "daw") or die("Error en la conexion");      
    $est=array();   
    $sql="select * from estudiante";
    $res=mysqli_query($conexion,$sql);
     while($reg =mysqli_fetch_assoc($res)){
    //vamos a guardar cada registro como un array asociativo
    //mysqli_fetch_assoc($res) es lo mismo que mysqli_fetch_array($res,MYSQLI_ASSOC)
    $est[]=$reg;    
     }
    for($i=0; $i<sizeof($est);$i++){
    ?>

    Identificación: <input type="text" value="<?php echo $est[$i]["id"];?>"/>
    <br />
    Nombre Completo: <input type="text" value="<?php echo $est[$i]["nombre"];?>"/>
    <br />
    Teléfono: <input type="text" value="<?php echo $est[$i]["telefono"];?>"/>
    <br />
    <hr />
    <?php
    }
    mysqli_close($conexion);
    ?>
   </body>
</html>
