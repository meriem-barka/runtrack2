<?php

$valeur = 1;
$compteur = 0;
$diviseur = 0;

  for($valeur = 0; $valeur < 1000; $valeur++) {
    $compteur = 0;

    for($diviseur = 1; $diviseur < 1000;  $diviseur++){
      if($valeur % $diviseur == 0 ){
          $compteur++;
      }
    }
    if($compteur == 2){
      echo $valeur.'<br>';
    }
  }


?>
