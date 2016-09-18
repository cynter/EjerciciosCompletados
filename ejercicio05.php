<html>
<head>
	<title>Ejercicio 5</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 5</h1>	
	<h2> De numeros a letras </h2>	
	<div>
	<?php
		$num = 55;
		$decena = "";
		$unidad = "";

		if($num <= 60 && $num >= 20){
			$str = (string)$num;
			
			/* Busco las decenas */
			switch ($str[0]) {
				case '2':
						if($str[1] == 0 ) {
							$decena = "Veinte";

						}else {
							$decena = "Veinti";
						}
					break;
				case '3':
						if($str[1] == 0 ) {
							$decena = "Treinta";							

						}else {
							$decena = "Treinta y";
						}
					break;
				case '4':
						if($str[1] == 0 ) {
							$decena = "Cuarenta";							

						}else {
							$decena = "Cuarenta y";
						}
					break;
				case '5':
						if($str[1] == 0 ) {
							$decena = "Cincuenta";							

						}else {
							$decena = "Cincuenta y";
						}
					break;			
				default:
						if($str[1] == 0 ) {
							$decena = "Sesenta";							

						}else {
							$decena = "Treinta y";
						}
					break;
			}

			/* Unidades */
			switch ($str[1]) {
				case '1':
					$unidad = "uno";
					break;
				case '2':
					$unidad = "dos";
					break;
				case '3':
					$unidad = "tres";
					break;
				case '4':
					$unidad = "cuatro";
					break;
				case '5':
					$unidad = "cinco";
					break;
				case '6':
					$unidad = "seis";
					break;
				case '7':
					$unidad = "siete";
					break;
				case '8':
					$unidad = "ocho";
					break;																																			
				case '9':
					$unidad = "nueve";
					break;									
				default:
					$unidad = "";
					break;
			}

		} else {
			echo "Numero no aceptado";
		}

		 $decena." ".$unidad;




	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

