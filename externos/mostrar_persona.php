<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$direccion = $_POST['direccion'];
		$mail = $_POST['mail'];
		$cv = $_POST['cv'];

		echo "Nombre: " . $nombre;
		echo "<br />";
		echo "Apellido: " . $apellido;
		echo "<br />";
		echo "Direccion: " . $direccion;
		echo "<br />";
		echo "E-Mail: " . $mail;
		echo "<br />";
		echo "CV: " . $cv;
	
	?>
	<p><a href="../ejercicio31.php">Volver</a></p>
</body>
</html>