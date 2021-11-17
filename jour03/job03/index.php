<?php

$str = 'I m sorry Dave Im afraid I can t
do that.';

$lettre = array("a","e","i","o","u","y",'A','E','I','O','U','Y');

for($valeur = 0; isset($str[$valeur]) == true; $valeur++){
  for($j = 0; isset($lettre[$j]) == true; $j++){
    if ($str[$valeur] == $lettre[$j]){
      echo $str[$valeur];
    }
  }
}

?>
