<?php


function Occurrences($str, $char){
$count = 0;
$chaine = 0;

//parcourire la chaîne de caractère
while (isset($str[$chaine])){

    if ($str[$chaine] == $char ) {
        $count++;
    }
      $chaine++;
  }
  return $count;
}

//Occurrences('hello','l');
$affiche = Occurrences('fonction nommée occurrences','m');
echo $affiche;
?>
