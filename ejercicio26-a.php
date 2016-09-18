<html>
<head>
	<title>Ejercicio 26	</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 26</h1>	
	<h2> Calcular la superifcie o el perimetro de un rectangulo </h2>	
      <form  method="post">      
        <h1>Ingresa los datos</h1>        
        <fieldset>
        	<legend><span class="number">1</span>Ingresa las medidas del rectangulo</legend>
          	<label for="base">Base:</label>
          	<input type="text" id="base" name="rec_base"><br>
          	<label for="altura">Altura:</label>
          	<input type="text" id="altura" name="rec_altura"><br>
            <input type="radio" name="rectangulo" value="superficie" checked> Superficie<br>
  			<input type="radio" name="rectangulo" value="perimerto"> Perimetro<br>		
  			<button type="submit">Enviar</button>
        </fieldset>
        
      </form>      
      <DIV>
		<?php 
			include "clase.php";

			if( !empty($_POST["rec_base"]) && !empty($_POST["rec_altura"])) 
			{
				$opcion = $_POST["rectangulo"];	
				$base = $_POST["rec_base"];
				$altura = $_POST["rec_altura"];

				if($opcion === 'superficie') {
					echo "La superficie del rectangulo es: " . $altura*$base;
				} else {
					echo "El perimetro del rectangulo es: " . ($altura*2+$base*2);
				}


				//$rectangulo = New Rectangulo($_POST["rec_base"], $_POST["rec_altura"]);
				//$rectangulo->ToString();	
			}

		 ?>
      </DIV>
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

