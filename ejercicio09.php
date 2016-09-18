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

	echo "Lapicero 1<br/>";
	foreach ($lapciera1 as $key => $value) {
		if($key === "Precio")
			echo $key.":  $".$value."<br/>";
		else
			echo $key.":  ".$value."<br/>";
	}
	echo "Lapicero 2<br/>";
	foreach ($lapciera2 as $key => $value) {
		if($key === "Precio")
			echo $key.":  $".$value."<br/>";
		else
			echo $key.":  ".$value."<br/>";
	}
	echo "Lapicero 3<br/>";
	foreach ($lapciera3 as $key => $value) {
		if($key === "Precio")
			echo $key.":  $".$value."<br/>";
		else
			echo $key.":  ".$value."<br/>";
	}
?>
</body>
</html>