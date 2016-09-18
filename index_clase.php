<html>
<head>
	<title>Clases</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="indice">
	<h1>Programacion III</h1>	
	<h2>Clases</h2>

	<?php 
		include("clase.php");
		$Rectangulo = new Rectangulo(10,3);
		
		$Rectangulo->SetColor("Amarillo");
		
		$Rectangulo->ToString();

	 ?>
</body>
</html>
