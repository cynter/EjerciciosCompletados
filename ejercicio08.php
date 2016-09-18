<html>
<head>
	<title>Ejercicio 8</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
<?php
	$v = array(1=>90, 30=>7, "e"=>99, "Hola" => "Mundo");
	$v1[1] = 90;
	$v1[30] = 7;
	$v1['e'] = 99;
	$v1['Hola'] = "Mundo";
	
	foreach ($v as $key => $value) {
		echo "Valor: ".$value."<br/>";
	}

	foreach ($v1 as  $value) {
		echo "Valor: ".$value."<br/>";
	}
?>
</body>
</html>