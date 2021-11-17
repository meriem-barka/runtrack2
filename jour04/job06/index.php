<?php


if($_GET['nombre'] % 2 == 0){
  echo 'Nombre pair';
}
else {
  echo 'Nombre impair';
}

?>

<!doctype html>
<html>
  <head>
      <meta charset="utf-8" />
      <title>Identification</title>
  </head>

  <body>
      <h2>Formulaire d'identification Type $_GET</h2>

      <form action="" method="get">

				Number : <input type="text" id="nombre" name="nombre"></input><br />

				<button type="submit">Connexion</button>

      </form>
  </body>
</html>
