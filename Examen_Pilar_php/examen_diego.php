<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <main>
        <section>
            <form action="examen_diego.php" method="post">
                <label>Introduzca un DNI</label> <br>
                <!-- En el input declaro un rango de números -->
                <!-- El campo es obligatorio error -> lo cual no puede ser vacio -->
                <input type="number" name="num" max="99999999" min="11111111" required> 
                <!-- Un input para la letra -->
                <!-- El campo es obligatorio error -> lo cual no puede ser vacio -->
                <input type="text" name="letra" placeholder="Letra" required>
                <br><br>
                <input type="submit" name="aceptar" value="Aceptar">
                <input type="reset" name="borrar" value="Borrar">
            </form>
            <?php
            if (!$_REQUEST) {
                
            }else{
                if (isset($_REQUEST['aceptar'])) {
                    if ($_REQUEST['letra']!=null) {
                        $letra=$_REQUEST['letra'];
                        $letra=mb_strtolower($letra);
                        $numletra=strlen($letra);
                        if ($numletra>=2) {
                            echo <<<xxx
                            <div>DNI Incorrecto <br> Ingrese solo una letra</div>
xxx;
                        } else {
                            $dni=$_REQUEST['num'];
                            $resto=$dni%23;
                            $letri=calcularLetra($resto);
                            if ($letra==$letri) {
                                echo <<<xxx
                            <div>DNI CORRECTO $dni$letra</div>
xxx;
                            } else {
                                echo <<<xxx
                            <div>ERROR. La letra $letra no coincide con la que corresponde con el DNI $dni</div>
xxx;
                            }
                            
//                             echo <<<xxx
//                             <div><b>$resto</b></div>
// xxx;
                        }
                        
                    } else {
                        echo <<<xxx
                        <div>Ingrese una letra</div>
xxx;
                    }
                } else {
                    # code...
                }
            
                
                

            }
            function calcularLetra($rest){
                $n=$rest;
                // echo $n;
                $cadena = array('1' => 'T', '2' => 'R', '3' => 'W','4' => 'A','5' => 'G', '6' => 'M', '7' => 'Y','8' => 'F','9' => 'P', '10' => 'D', '11' => 'X','12' => 'B','13' => 'N', '14' => 'J', '15' => 'Z','16' => 'S','17' => 'Q', '18' => 'V', '19' => 'H','20' => 'L','21' => 'C', '22' => 'V', '23' => 'E');
                foreach ($cadena as $indece => $valor) {
                    $numo=$indece;
                    if ($n==$numo) {
                        // echo $numo;
                        $letrareal=$valor;
                        $letrareal=mb_strtolower($letrareal);
                    }
                }
                return $letrareal;
            }
                

            ?>
            
        </section>
    </main>
</body>
</html>