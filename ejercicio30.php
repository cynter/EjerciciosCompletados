<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 30	</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 30</h1>	
	<h2> Empresa de Viaje II</h2>	
      <form  method="post">      
        <fieldset>
        	<legend><span class="number">1 -</span>Elija el destino a viajar</legend>
          	<label for="lugares">Día:</label>
			<select name="lugares" id="lugares">
				<option value="BO">Bogotá</option>	
				<option value="RO">Roma</option>	
				<option value="LO">Londres</option>	
				<option value="MA">Madrid</option>	
			</select>       
			<br>
          	<label for="pago">Medio de pago:</label>
			<select name="pago" id="pago" >
				<option value="A">Efectivo</option>	
				<option value="B">Tarjeta de Credito</option>	
				<option value="B">Tarjeta de Débito</option>	
			</select>      
			<br>
			<label for="cantidad_pasajes">Cantidad de pasajes:</label>
			<input type="text" name="cantidad_pasajes" id="cantidad_pasajes"> 			   	
  			<button type="submit" name="calcular">Mostrar</button>
        </fieldset>        
      </form>      
      <DIV>
		<?php 
			if (isset($_POST["calcular"]) ) {
				$lugar 				= $_POST["lugares"];				
				$pago 				= $_POST["pago"];
				$cantidadPasajes 	= $_POST["cantidad_pasajes"];
				$valorPasaje		= 0;				
				$valorParcial		= 0;
				$valorTotal			= 0;

				/* Busco el precio del pasaje */
				switch ($lugar) {
					case 'BO':
						$valorPasaje = 500;
						break;

					case 'RO':
						$valorPasaje = 900;
						break;
					case 'LO':
						$valorPasaje = 1100;
						break;
					default:
						$valorPasaje = 700;
						break;
				}

				/* Si la cantidad es mayor a dos, le doy un decuento mas el costo normal */
				if ($cantidadPasajes > 2 ) {
				 		$valorParcial += ($valorPasaje*($cantidadPasajes-2))*0.65;
				 		$valorParcial += $valorPasaje*2; 
				 	} else {
				 		$valorParcial = $valorPasaje * $cantidadPasajes;
				 	}	
	
			/* Calculo el valor parcial del pasaje por el medio de pago*/
				switch ($pago) {
					case 'A':
						$valorTotal = round(($valorParcial*0.88),2);
						break;					
					default:
						$valorTotal = ($valorParcial*0.93);
						break;
				}

				echo "El valor del viaje es: $valorTotal";
			} 
		 ?>
      </DIV>
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

