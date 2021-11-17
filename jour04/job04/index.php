<?php

//var_dump ($_POST);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Récuperation des Donnes d'un formulaire</title>
    <link href="css/formulaire.css" rel="stylesheet" media="all">
  </head>

  <body>
    <h2>Tableau Récuperation des Donnes avec $_POST</h2>
    <table>
      <thead>
        <tr>
          <th>Arguments</th>
          <th>Valeurs</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($_POST as $key => $value) {

            echo '
            <tr>
              <td>'.$key.'</td>
              <td>'.$value.'</td>
            </tr>
            ';
          }
        ?>
      </tbody>

      <tfoot>

      </tfoot>
    </table>

    <fieldset>
      <legend>M'écrire</legend>
        <form action="#" method="post">
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

    <footer>
      <p>Copyright © 2021. Tous droits réservés.</p>
    </footer>
  </body>
</html>
