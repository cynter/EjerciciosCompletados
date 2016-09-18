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
		$palabra = array("H", "o","l","a");
		

		function invertirArray ($array) {
			$aux = array();
			for ($i=count($array)-1; $i >=0 ; $i--) { 
				array_push($aux, $array[$i]);
			}
			var_dump($aux);
		}


		invertirArray($palabra);
	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

