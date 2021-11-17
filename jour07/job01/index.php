<?php


session_start ();

 if (isset($_POST['reset'])){
    unset($_SESSION['$_nbvisites']);
 }

if (isset($_SESSION['$_nbvisites'])){
  $_SESSION['$_nbvisites']++;
}
else {
  $_SESSION['$_nbvisites']= 0;
}
 echo $_SESSION['$_nbvisites'];


?>
<!DOCTYPE html>
<html lang="fr">
<head>

</head>

<body>
  <h2>Sessions</h2>

  <form action='index.php' method="post">

    <input type="submit" name="reset" value="Reset">

  </form>
</body>
