<html>
<head>
	<title>Ejercicio 33</title>
	<link rel="stylesheet" href="css/style.css">		
</head>
<body id="ejercicio">
	<h1>Ejercicio 33</h1>	
	<h2> Descomponer un numero en sus partes</h2>		
	<form id="contact" method="post">
	  <div class="container">
	   Ingrese un numero:<input type="text" name="numero" placeholder="Numero" />
	    <button id="submit" name="submit" type="submit">Descomponer numero</button>
	  </div>
	  <div class="container">
		<p><a href="index.php">Volver</a></p>	
		</div>	
	</form>
	<div class="container">

	<?php
		if(!empty($_POST['numero']))
		{
			$numero = $_POST['numero'];
			$cantCifras;
			$numImpares = array();
			$numPares = array();
			$arrayNum = str_split($numero);
			$arrayDivisores = array();
			$sumImpares = 0;
			$sumPares = 0;
			$sumNumero = 0;


			if (!is_numeric($numero)) {
				echo "Ingrese numeros solamente";
				return;
			}
			
			$cantCifras = strlen($numero);

			for($i = 0; $i<$cantCifras; $i++) {
				if($numero[$i] %2 != 0) {
					$numImpares[] = $numero[$i];
				}else{
					$numPares[] = $numero[$i];
				}
			}

			$i = 0;
			while ( $i < count($numImpares)) {
				$sumImpares += $numImpares[$i];
				$i++;
			}

			$i = 0;
			while ( $i < count($numPares)) {
				$sumPares += $numPares[$i];
				$i++;
			}			

			for ($i=0; $i < count($arrayNum); $i++) { 
				$sumNumero += $arrayNum[$i];
			}

			for ($i=1; $i <= $numero; $i++) { 
				if( $numero%$i == 0 ) {// && !in_array($i, $arrayDivisores) ){
					$arrayDivisores[] = $i;
				}	
			}			

			echo "El numero es:" . $numero;
			echo "<br />";
			echo "Es un numero de " . $cantCifras . " cifras.";
			echo "<br />";			
			echo "La suma de los numeros impares da " . $sumImpares;
			echo "<br />";						
			echo "La suma de los numeros pares da " . $sumPares;
			echo "<br />";				
			echo "La suma total de los numeros da " . $sumNumero;
			echo "<br />";	
			echo "Divisores: ";						
			foreach ($arrayDivisores as $key => $value) {
				echo $value . " ";

			}
		}

	?>
	</div>	

</body>
</html>

