<?php

//var_dump ($_GET);

$compteur = 0;

foreach ($_GET as $key => $value) {
 $compteur++;
}
echo $compteur;

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Registration Form</title>
    <link href="css/formulaire.css" rel="stylesheet" media="all">
  </head>

  <body class="font2">
    <header>
      <nav>
        <ul>
          <li><a href=""></li></a>
        </ul>
      </nav>
      <h1 class="titre">Registration Form</h1>
    </header>

    <main>
      <div class="form-div">
        <fieldset>
        <legend>M'écrire</legend>
          <form action="#" method="get">
            <p>
              <label for="name">Name</label>
              <input type="text" name="firstname" placeholder="Name">
            </p>
            <p>
              <label for="lastname">Prénom</label>
              <input type="text" name="lastname" placeholder="Prénom">
            </p>

            <p>
              <label for="email">Email</label>
              <input type="text" size="30" maxlength="50" id="email" name="email" placeholder="email"required>
            </p>

            <p>
              <label for="message">Message</label>
              <textarea type="text" name="message" placeholder="Message"></textarea>
            </p>

            <p class="button">
              <input type="reset" value="Annuler">
              <input type="submit" value="valider">
            </p>
          </form>
        </fieldset>
      </div>
    </main>
    <footer>
      <p>Copyright © 2021. Tous droits réservés.</p>
    </footer>
  </body>
</html>
