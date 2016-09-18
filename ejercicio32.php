<html>
<head>
	<title>Ejercicio 32</title>
	<link rel="stylesheet" href="css/elegant.css">		
</head>
<body>
	<h1>Ejercicio 32</h1>	
	<h2> titulo </h2>		
	<form id="contact" method="post">
	  <div class="container">
	    Gasto Total: <input type="text" name="gasto" placeholder="Name" /><br />
	    
	    <button id="submit" name="submit" type="submit">Calcular costo final</button>
	  </div>
	</form>
	<div>
	<?php
		if(!empty($_POST['gasto']))
		{
			$gasto = $_POST['gasto'];
			$total = $gasto;
			$descuento = 0;			
			
			if (!is_numeric($gasto)) {
				echo "Ingrese numeros solamente";
				return;
			}
			
			if ($gasto <= 550 && $gasto >= 300) {
				$total = $gasto * 0.9;
				$descuento = 10;
			} else if ($gasto > 550) {
				$total = $gasto * 0.8;
				$descuento = 20;
			}

			echo "El costo es de $" . $gasto;
			echo "<br />";
			echo "El descuento es de " . $descuento . "%";
			echo "<br />";
			echo "El costo final es de $" . $total;
		}

	?>
	</div>	
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

