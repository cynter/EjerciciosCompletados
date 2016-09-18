<html>
<head>
	<title>Ejercicio 26	</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 26</h1>	
	<h2> Calcular la superifcie o el perimetro de un rectangulo </h2>	
      <form  action="destino.php" method="post">      
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
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

