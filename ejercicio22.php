<html>
<head>
	<title>Ejercicio 22</title>
	<link rel="stylesheet" href="css/style.css">	
	<style type="text/css">
	.gris{
		background-color: #BDBDBD;
	}	

	.blanco{
		background-color: #FFFFFF;
	}	
	</style>
</head>
<body id="ejercicio">
	<h1>Ejercicio 22</h1>	
	<h2> Tabla dinamica </h2>	
	<div>
	<?php
	define("FILA", 5);
	define("COLUMNA", 3);


	echo "<table> ";
	for ($i=1; $i <=FILA ; $i++) { 
		if ($i%2==0) {
			echo "<tr class='blanco'>";
		} else {
			echo "<tr class='gris'>";
		}	

		for ($c=1; $c<=COLUMNA ; $c++) { 
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

