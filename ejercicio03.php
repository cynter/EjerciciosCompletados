<html>
<head>
	<title>Ejercicio 3</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 3</h1>	
	<h2> Buscar el numero medio de tres numeros </h2>	
	<div>
	<?php

	$a = 8;
	$b = 9;
	$c = 2;

	// a b c
	// a c b
	// b a c
	// b c a
	// c a b
	// c b a	

	if ($a != $b && $a != $c && $b != $c) {
		if($a > $b ){
			if ($c < $b ) {
				echo "$b es el medio";
			} else {
				echo "$c es el medio";
			}			
		} else if( $b > $a) {
			if( $c < $a ) {
				echo "$a es el medio";
			}
			else {
				echo "$c es el medio";	
			}
		}
		else {
			if($b < $a ){
				echo "$a es el medio";
			} else {
				echo "$b es el medio";
			}
		}

	} else {
		echo "Error";
	}
	





	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

