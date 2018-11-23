<html>
<head>
	<meta charset="UTF-8">
	<title>DNI</title>
</head>
<body>
	
	<?php 

		if (!$_GET) {
			echo <<<texto
				<h2>Introduce tu DNI</h2>
				<form action="" method="get">
					<p>Recuerda introducir 8 números y una letra</p>
					<input type="text" name="dni">
					<input type="submit" name="aceptar" value="aceptar">
					<input type="reset" value="borrar">
				</form>
texto;
			
		}else{
			
			//funcion para comprobar que la letra sea correcta
			function letra($dni){
			$letra = "trwagmyfpdxbnjzsqvhlcke";
			$num = substr($dni, 0 , 8);
			$let = substr($dni, -1);
			$resto = $num%23;
			//echo $resto;

			$final = substr($letra, $resto, 1);
			//echo $final;
			
			return $final;
			
		}

			$dni = $_GET['dni'];
			$longitud = strlen($dni);
			$compLetra = letra($dni);

			//comprobar el número de caracteres introducido
			if ($longitud < 9 || $longitud > 9) {
				echo 'Número erroneo de carácteres, el número total debe ser de nueve <br>';	
			}
			// comprobar si el input esta vacío
			if (empty($dni)) {
				echo 'El campo DNI no puede estar vacío <br>';
			}

			//comprobar que los 8 primeros caracteres sean números
			$numeros = substr($dni, 0 , 8);
			if (!is_numeric($numeros)) {
				echo 'Los 8 primeros carácteres no son números <br>';
			}

			//comprobar letra
			$let = substr($dni, -1);
			$min = strtolower($let);
			if ($min != $compLetra ) {
				echo 'La letra ' . $let. ' NO coincide con la que corresponde con el DNI '. $dni. '<br>';
			}else{
				echo 'Todo correcto<br>';
			}


			//botón para volver
			echo '<input type="submit" name="volver" value="volver" onclick = "history.go(-1)"><br>';
		
			
		




		}
	 ?>
	
</body>
</html>