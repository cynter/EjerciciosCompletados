<html>
<head>
	<title>Ejercicio 2</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 2</h1>	
	<h2> Fecha y estación del año </h2>	
	
	<?php
		/* Capturo la fecha con la funcio date */
		$fecha_anio =  date('Y',time());	
		$fecha_mes = date('m',time());
		$fecha_dia = date('d',time());


		/* Capturo la fecha con la funcion getdate que pasandole el parametro time devuelve un Array con los datos del dia */
		$fecha = getdate(time());
		$dia = $fecha["mday"];
		$mes = $fecha["mon"];
		
		/* Muestro la Fecha del dia */
		echo "$fecha_dia/$fecha_mes/$fecha_anio<br />";

		/* busco en que estacion del año estamos */
		if( $mes >=1 &&  $mes<= 3 )
		{
			if($mes== 3 && $dia >20  ){
				echo "Es Otoño";
			}else{
				echo "Es Verano";
			}

		}elseif (3 <= $mes && $mes <= 6 ) {
			if(($dia >=21 && $mes >=3) || ($dia <=20 && $mes <=6) )
				echo "Es Otoño";
			else
				echo "Es Invierno";

		}	elseif ( 6 <= $mes && $mes <= 9 ) {
			if(($dia >=21 && $mes >=6) || ($dia <=20 && $mes <=9) ) {
				echo "Es Invierno";
			}		
			else {
				echo "Es Primavera";		
			}
				
		}else {
			if( ($dia >21 && $mes >=9) || ($dia <=20 && $mes <=12) ) {
				echo "Es Primavera";
			}			
			else {
				echo "Es Verano";		
			}			
		} 	
	?>

	<p><a href="index.php">Volver</a></p>
</body>
</html>

