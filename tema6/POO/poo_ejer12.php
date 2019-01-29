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
     foreach ($est as $key => $value) {
         # code...
         foreach ($value as $key2 => $value2) {
             # code...
             echo $value2."<br>";
         
        }
        echo "<hr>";
    }
    print_r($est);
    mysqli_close($conexion);
    ?>
   </body>
</html>