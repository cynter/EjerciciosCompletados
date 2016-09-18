<html>
<head>
	<title>Ejercicio 12</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 12</h1>	
	<h2> Invertir Palabra </h2>	
	<div>
	<?php
		$palabra = "Invertime";
		$arr = str_split($palabra);

		function invertirArray ($array) {
			$aux = array();
			for ($i=count($array)-1; $i >=0 ; $i--) { 
				array_push($aux, $array[$i]);
			}
			return $aux;
		}

		
		$palabraInvertida = implode("",invertirArray($arr));

		echo "Derecho : " . $palabra;
		echo "<br />";
		echo "Invertido : " . $palabraInvertida;
		
	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

