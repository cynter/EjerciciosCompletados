<html>  
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Destino</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <DIV>
        <?php 

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

          } else {
            echo "No se enviaron correctamente los datos.";
          }


         ?>

      </DIV>
      <div><a href="ejercicio26-b.php">Volver al ejercicio</a></div>
    </body>
</html>