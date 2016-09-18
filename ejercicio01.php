<html>
<head>
	<title>Ejercicio 1</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 1</h1>	
	<h2>Sumatorio de numero que el total no supere el nº 1000</h2>	
	<div>
	<?php
		$i=1;
		$c = 0;
		$suma = 0;
		$limite = 1000;
		
		for($i=1; ($suma+$i)<$limite; $i++)
		{
			$c++;
			$suma += $i; 
			echo $i."<br/>";
		}	

		echo "La Suma es: ".$suma."<br/>";
		echo "La cantidad de numeros es de: ".$c."<br/>";
	?>
	</div>
	<p><a href="index.php">Volver</a></p>
</body>
</html>