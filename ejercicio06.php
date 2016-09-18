<html>
<head>
	<title>Ejercicio 6</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 6</h1>	
	<h2> Arrays - Nivel 2 </h2>	
	<div>
	<?php
		$arrayNumerico = array();
		$sumatoria = 0;
		$promedio = 0;
		for ($i=0; $i < 5 ; $i++) { 
			$arrayNumerico[$i] = rand(1,10);
		}
		for ($i=0; $i < 5 ; $i++) { 
			$sumatoria += $arrayNumerico[$i];
		}		
		$promedio = $sumatoria/$i;

		echo $promedio .  "<br />";

		if($promedio > 6 ){
			echo "El promedio es mayor a Seis.<br />";
		} elseif ($promedio == 6) {
			echo "El promedio es igual a Seis.<br />";
		}else {
			echo "El promedio es menor a Seis.<br />";
		}







	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

