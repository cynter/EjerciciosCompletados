<html>
<head>
	<title>Ejercicio 23</title>
	<link rel="stylesheet" href="css/style.css">	
	<?php  
		if (isset($_POST["color"])) {
			$color = $_POST["color"];
			printf("<style>
					body{
						background-color:%s;
					}
					</style>
					", $color);
		} 
		

	?>
</head>
<body >
	<h1>Ejercicio 23</h1>	
	<h2> Cambiar el color del Select </h2>	
	<form action="" method="post">
		 <select name="color">
		  <option value="#F00E2C">Rojo</option>
		  <option value="#F0F00E">Amarillo</option>
		  <option value="#1D2FF5">Azul</option>
		  <option value="#0EC41A">Verde</option>
		  <option value="#970EC4">Violeta</option>
		</select> 
		<input type="submit" value="Cambiar Color">
	</form>
	<div>
		<p><a href="index.php">Volver</a></p>	
	</div>	
	
</body>
</html>

