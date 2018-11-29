<?php
if($_REQUEST['nombre']==null){
    echo "Ingrese un nombre";
}else{
    $nombre=$_REQUEST['nombre'];
    if ($_REQUEST['direccion']==null) {
        echo "Ingrese una dirección";
    } else {
        $dir=$_REQUEST['direccion'];
        if (isset($_REQUEST['j&q']) or isset($_REQUEST['napo']) or isset($_REQUEST['hawa'])) {
            $archivo=fopen("pizza01.txt","a") or die("Problemas en la creacion"); // "a" es para escribir
            fwrite($archivo,$nombre); // se guarda en archivo el nombre del formulario
            fwrite($archivo, "<br/>");
            fwrite($archivo, $dir); // se guarda en archivo la dirección del formulario
            fwrite($archivo, "<br/>");
            if(isset($_REQUEST['j&q'])){
                $pizza="Jamón & Queso".$_REQUEST['cant_j&q'];
                fwrite($archivo,$pizza);
                fwrite($archivo, "<br/>");
            }
            if(isset($_REQUEST['napo'])){
                $pizza="Napolitana".$_REQUEST['cant_napo'];
                fwrite($archivo,$pizza);
                fwrite($archivo, "<br/>");
            }
            if(isset($_REQUEST['hawa'])){
                $pizza="Hawaiana".$_REQUEST['cant_hawa'];
                fwrite($archivo,$pizza);
                fwrite($archivo, "<br/>");
            }
            fwrite($archivo,"--------------------------------------------------------");
            fclose($archivo);
        } else {
            echo "Seleccione una pizza";
        }
        
    }
    
}
// $archivo=fopen("pizza01.txt","a") or die("Problemas en la creacion"); // "a" es para escribir
?>