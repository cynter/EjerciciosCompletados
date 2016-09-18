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

          if( !empty($_POST["password1"]) && !empty($_POST["password2"])) 
          {
            $password1 = $_POST["password1"]; 
            $password2 = $_POST["password2"];

            if($password1 === $password2) {
              header( "Refresh:1; url=http://localhost/programacioniii/welcome.php", true, 303);
            } else {
              echo "Las contraseñas no son iguales. Espere y sera redirigido.";
              header( "Refresh:4; url=http://localhost/programacioniii/ejercicio27.php", true, 303);
            }

          } else {

            echo "No se enviaron correctamente los datos.";
            header( "Refresh:4; url=http://localhost/programacioniii/ejercicio27.php", true, 303);
            
          }


         ?>

      </DIV>      
    </body>
</html>