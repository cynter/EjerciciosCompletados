<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 28	</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 28</h1>	
	<h2> Elija el formato de fecha a mostrar. </h2>	
      <form  method="post">      
        <fieldset>
        	<legend><span class="number">1</span>Elija las opciones a mostrar</legend>
          	<label for="dia">Día:</label>
          	<input type="checkbox" id="dia" name="dia" value="true"><br>
          	<label for="mes">Mes:</label>
          	<input type="checkbox" id="mes" name="mes" value="true"><br>
          	<label for="year">Año:</label>
          	<input type="checkbox" id="year" name="year" value="true"><br>          	
  			<button type="submit">Mostrar</button>
        </fieldset>        
      </form>      
      <DIV>
		<?php 
			if (isset($_POST["dia"]) || isset($_POST["mes"]) || isset($_POST["year"])) {
				$fecha = "";
				if  (isset($_POST["dia"])) {
					
						$fecha .= "El dia es: ". date("d") ."<br>";
					}

					if (isset($_POST["mes"])) {
						$fecha .="El mes es: ". date("m") ."<br>";
					} 

					if(isset($_POST["year"])) {
						$fecha .= "El año es: ". date("Y") ."<br>";
					}

					echo $fecha;
			} else {
				echo "Elija  una opción.";
			}					
				
			
			

		 ?>
      </DIV>
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

