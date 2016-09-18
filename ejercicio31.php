<html>
<head>
	<title>Ejercicio 31</title>
	<link rel="stylesheet" href="css/form.css">
</head>
<body id="ejercicio">
	<h1>Ejercicio 31</h1>	
	<h2> Mostrar datos de la persona </h2>	
	<header>MINIMALISTIC FORM</header>

	<form id="form" class="topBefore" action="externos/mostrar_persona.php" method="post">
		<input id="name" name="nombre" type="text" placeholder="NOMBRE">
		<input id="lastname" name="apellido"	type="text" placeholder="APELLIDO">
		<input id="address" type="text" name="direccion" placeholder="Calle altura CP">
		<input id="email" type="text" name="mail" placeholder="E-MAIL">
		<textarea id="cv" name="cv"type="text" placeholder="Escriba su CV aquí."></textarea>
	  	<input id="submit" type="submit" value="Enviar">	  	
	</form>
	<a id="volver" href="index.php">Volver</a>	  
	
	<!--form action="externos/mostrar_persona.php" method="post">
	<label for="name">Nombre</label>	
	<input type="text" name="nombre" id="name">	
	<label for="lastname">Apellido</label>	
	<input type="text" name="apellido" id="lastname">

	</form-->
	
</body>
</html>

