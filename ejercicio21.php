<html>
<head>
	<title>Ejercicio 21</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 21</h1>	
	<h2> Tabla dinamica </h2>	
	<div>
	<?php
	echo "<table border='1'>";
	for ($i=1; $i <=5 ; $i++) { 
		echo "<tr>";
		for ($c=1; $c<=3 ; $c++) { 
			echo "<td>$i - $c</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

