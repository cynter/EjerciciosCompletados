<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 29	</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 29</h1>	
	<h2> Viajar y su costo. </h2>	
      <form  method="post">      
        <fieldset>
        	<legend><span class="number">1</span>Elija el destino a viajar</legend>
          	<label for="lugares">Día:</label>
			<select name="lugares" id="lugares">
				<option value="500">Bogotá</option>	
				<option value="900">Roma</option>	
				<option value="1100">Londres</option>	
				<option value="750">Madrid</option>	
			</select>          	
  			<button type="submit">Mostrar</button>
        </fieldset>        
      </form>      
      <DIV>
		<?php 
			if (isset($_POST["lugares"]) ) {
				echo "El valor del viaje es: ". $_POST["lugares"]["text"];
			} 
		 ?>
      </DIV>
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

