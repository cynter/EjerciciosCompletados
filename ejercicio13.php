<html>
<head>
	<title>Ejercicio XX</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio XX</h1>	
	<h2> titulo </h2>	
	<div>
	<?php

		function verificarString($palabra,$max){
			$largoJusto;
			$esFrase;
			if(strlen($palabra) <= $max)
			{
				$largoJusto = true;
			} else {
				$largoJusto = false;
			}


			switch (strtoupper($palabra)) {
				case 'RECUPERATORIO':
					$esFrase = true;
					break;
				case 'PARCIAL':
					$esFrase = true;
					break;
				case 'PROGRAMACION':
					$esFrase = true;
					break;										
				
				default:
					$esFrase = false;
					break;
			}

			if($largoJusto && $esFrase)
				return 1;
			else
				return 0;	
		}

		$respuesta = verificarString("Recuperatorio", 13);
		echo 	$respuesta;




	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

