<?php

// Car La méthode GET fait circuler les informations du formulaire en clair dans la barre d'adresse; 

if($_POST['nom'] == 'John' && $_POST['pwd'] == 'Rambo'){
  echo 'C est pas ma guerre.';
}
else {
  echo 'Votre pire cauchemar';
}

?>

<!doctype html>
<html>
  <head>
      <meta charset="utf-8" />
      <title>Identification</title>
  </head>

  <body>
      <h2>Formulaire d'identification Type $_POST</h2>

      <form action="" method="post">

				Username : <input type="text" id="nom" name="nom"></input><br />
        password : <input type="password" id="pwd" name="pwd"></input><br/>

				<button type="submit">Connexion</button>

      </form>
  </body>
</html>
