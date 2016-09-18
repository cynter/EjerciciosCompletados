<html>
<head>
	<title>Ejercicio 24</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 24</h1>	
	<h2> Tabla dinamica con PHP </h2>	
	<div>
	<form action="" method="post">
	<?php
		echo "<label>Filas:</label>";
		echo "<select name=\"fila\">";
		for ($i=1; $i<=50; $i++) { 
			echo "<option value='$i' >$i</option>";	
		}
		echo "</select>";
		echo "<label>Columnas:</label>";
		echo "<select name=\"columna\">";
			for ($i=1; $i <50; $i++) { 
			echo "<option value='$i' >$i</option>";	
			}			
		echo "</select>";
		echo "<br />";
	?>
		<input type="submit" value="Crear Tabla">
	</form>	
	</div>	
	<div>
	<?php
		/* Verifico que se haya enviado el formulario */
		if (!empty($_POST["columna"])) {

			/* Capturo los valores */
			$fila = $_POST["fila"];
			$columa = $_POST["columna"];
			
			/* Creo la tabla */
			echo "<table border='1'>";
			for ($i=1; $i <=$fila ; $i++) { 
				echo "<tr>";
				for ($c=1; $c<=$columa ; $c++) { 
					echo "<td>$i - $c</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		} 
		

	 ?>
	</div>
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

