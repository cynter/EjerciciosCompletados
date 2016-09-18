<html>
<head>
	<title>Ejercicio 25	</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body id="ejercicio">
	<h1>Ejercicio 25</h1>	
	<h2> Rectangulo </h2>	
      <form  method="post">      
        <h1>Ingresa los datos</h1>        
        <fieldset>
          <legend><span class="number">1</span>Ingresa las medidas del rectangulo</legend>
          <label for="base">Base:</label>
          <input type="text" id="base" name="rec_base">
          <label for="altura">Altura:</label>
          <input type="text" id="altura" name="rec_altura">
        </fieldset>
        <button type="submit">Enviar</button>
      </form>      
      <DIV>
		<?php 
			include "clase.php";

			if( isset($_POST["rec_base"]) && isset($_POST["rec_altura"])) 
			{
				$rectangulo = New Rectangulo($_POST["rec_base"], $_POST["rec_altura"]);
				$rectangulo->ToString();	
			}

		 ?>
      </DIV>
	<p><a href="index.php">Volver</a></p>	
</body>
</html>

