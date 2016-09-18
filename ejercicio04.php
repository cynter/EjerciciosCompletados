<html>
<head>
	<title>Ejercicio 4</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 4</h1>	
	<h2>Calculadora </h2>	
	<div>
	<?php
		$operador = "*";
		$op1 = 95.5;
		$op2 = 10;	

		switch ($operador) {
			case '+':
				echo $op1 + $op2;
				break;
			case '-':
				echo $op1 - $op2;
				break;
			case '*':
				echo $op1 * $op2;
				break;							
			case '/':
				if($op2 > 0){
				echo $op1 / $op2;	
			} else {
				echo "no se puede dividir por cero(0)";
			}
				
				break;				
			default:
				echo "No existe esta operacion";
				break;
		}




	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

