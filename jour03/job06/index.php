
<?php

$str = 'Les choses que l on possede finissent par nous posseder.';


//---------------Calcul la longueur de la chaîne STR
for ($index = 0; isset($str[$index]) ; $index++); // Pour chaque caractére de str
$length = $index;

//---------------Affichage du string à l'envert
for (  $index = ($length-1) ; $index >= 0 ; $index -- ){ // Pour chaque caractére de str en commencent par la fin 
  echo ( $str[ $index ] );
}

?>
