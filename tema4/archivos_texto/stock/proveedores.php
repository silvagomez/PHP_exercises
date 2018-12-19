<?php
require_once '../../../estilo/formato_i.php';
$contador_lineas=1;
if(!$_REQUEST){
    echo "ERROR no sé por que";
}
else{
    // $codigo_proveedor=$_REQUEST['cod_prov'];
    $empresa=$_REQUEST['empresa'];
    $poblacion=$_REQUEST['poblacion'];
    if (filesize("proveedores.txt")<=0) {
        // echo "Estoy vacio";
        $archivo=@fopen("proveedores.txt","a+") or die("ERROR al abrir el archivo");
        fwrite($archivo, "0|".$empresa."|".$poblacion.PHP_EOL);
        fclose($archivo);
        echo <<<html
        <p>
        Proveedor creado exitosamente.
        </p>
        <a href="stock.html">Volver</a> <br>
        <a href="view_proveedores.php">Ver artículos</a>
html;
    } else {
        // echo "Tengo información<br>";
        $archivo=@fopen("proveedores.txt","r") or die("ERROR al abrir el archivo");
        $linea=fgets($archivo);
        while (!feof($archivo)) {
            // $campos[$contador_lineas]=explode("|",$linea);
            $contador_lineas++;
            $linea=fgets($archivo);
        }
        fclose($archivo);
        //El código siguiente es un poco absurdo pero fue el proceso mental que hice para darme cuenta que solo tenia que utilizar el contador de lineas.
        // print_r($campos); // para comprobar como se creo el array bidimensional
        // $r_final= end($campos); // para obtener el último array
        // echo "<br>"; 
        // print_r($r_final); // para comprobar como la info del útlimo array
        // $numero=$r_final[0]; //paso a la variable el último codigo del provedor 
        // echo $numero;
        // $codigo_proveedor=$numero+1;
        $codigo_proveedor=$contador_lineas+1;
        $archivo=@fopen("proveedores.txt","a+") or die("ERROR al abrir el archivo");
        fwrite($archivo, $codigo_proveedor."|".$empresa."|".$poblacion.PHP_EOL);
        fclose($archivo);
        echo <<<html
        <p>
        Proveedor creado exitosamente.
        </p>
        <a href="stock.html">Volver</a> <br>
        <a href="view_proveedores.php">Ver artículos</a>
html;
    }
}
require_once '../../../estilo/formato_f.php';
?>