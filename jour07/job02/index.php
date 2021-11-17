<?php

setcookie('nbvisites', 0);
if(isset($_COOKIE['nbvisites'])){
  $_COOKIE['nbvisites'] ++;
}
else {
    $_COOKIE['nbvisites'] = 0;
}




?>

<<!DOCTYPE html>
<html lang="fr">
<head>

</head>

<body>
  <h2>Cookies</h2>

  <form action='index.php' method="post">

    <input type="submit" name="reset" value="Reset">

  </form>
</body>
