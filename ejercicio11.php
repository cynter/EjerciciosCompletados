<html>
<head>
	<title>Ejercicio 11</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 11</h1>	
	<h2> Funciones 01 </h2>	
	<div>
	<?php
	/* funcion potencia de numeros*/
	function potenciaNumeros() {

		for ($a=1; $a<=4; $a++) { 
			for ($b=1; $b<=4; $b++) { 
						/* Numero, Potencia */					
				echo 	pow($a, $b) . "<br />";
			}
		}
	}

	/* Llamada */
	potenciaNumeros();



	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

