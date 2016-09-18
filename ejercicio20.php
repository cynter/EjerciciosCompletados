<html>
<head>
	<title>Ejercicio 20</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<?php 

	if (isset($_POST["color"])) {
			echo "<body bgcolor='red'>";
		} else {
			echo "<body>";	
		}
			
 ?>
	<h1>Ejercicio 20</h1>	
	<h2> Cambiar el color del Bakground </h2>	
	<form action="" method="post">
		<label>Cambiar color:</label>		
		<input type="hidden" name="color">
		<input type="submit" value="Cambiar Color">		
	</form>
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

