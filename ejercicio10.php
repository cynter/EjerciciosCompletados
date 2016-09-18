<html>
<head>
	<title>Ejercicio 9</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
<?php
	
	$lapciera1 = array("Color"=>"Rojo", "Trazo"=>"0.5", "Marca"=>"Bic", "Precio" => 9.85);
	$lapciera2 = array("Color"=>"Amarillo", "Trazo"=>"0.8", "Marca"=>"Parker", "Precio" => 29.44);
	$lapciera3 = array("Color"=>"Verde", "Trazo"=>"0.25", "Marca"=>"Sharpie", "Precio" => 12.65);
	$lapiceras = array( $lapciera1, $lapciera2, $lapciera3);

	foreach ($lapiceras as $lapicera) {
		
		echo $lapicera["Color"] . " <br/>" .$lapicera["Trazo"] . "<br/> ".$lapicera["Marca"] . "<br/> ".$lapicera["Precio"] . "<br/> ";

		/*
		foreach ($lapicera as $indice => $valor) {
		if($indice === "Precio")
			echo $indice.":  $".$valor."<br/>";
		else
			echo $indice.":  ".$valor."<br/>";
		}
		*/
	}

	
?>
</body>
</html>