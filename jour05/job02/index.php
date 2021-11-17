<?php

function Bonjour($jour){

  if ($jour){
    echo'Bonjour';
  }
  else {
    echo'Bonsoir';
  }
}
$msg = true;
Bonjour($msg);

?>
