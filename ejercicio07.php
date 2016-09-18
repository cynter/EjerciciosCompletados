<html>
<head>
	<title>Ejercicio 7</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 7</h1>	
	<h2> titulo </h2>	
	<div>
	<?php
		$numerosImpares = array();
		$i = 1;
		
		while (count($numerosImpares) < 10) {
			if($i%2 != 0)
				array_push($numerosImpares, $i);

			$i++;
		}

		echo "For: <br />";
		for ($i=0; $i < count($numerosImpares); $i++) { 
			echo $numerosImpares[$i] . "<br />";
		}

		echo "While: <br />";
		$i=0;
		while ($i < count($numerosImpares)) {
			echo $numerosImpares[$i] . "<br />";
			$i++;
		}

		echo "Foreach: <br />";
		foreach ($numerosImpares as $key => $value) {
			echo $value . "<br />";
		}


	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

