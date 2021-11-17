<?php

/*function Leetspeak($str){

  for ($i = 0; isset($str[$i]); $i++){

    if ($str[$i] == 'a'||$str[$i] == 'A' ){
      $str[$i] = 4;
    }
    elseif ($str[$i] == 'b'||$str[$i] == 'B'){
      $str[$i] = 8;
    }
    elseif ($str[$i] == 'e'||$str[$i] == 'E'){
      $str[$i] = 3;
    }
    elseif ($str[$i] == 'g'||$str[$i] == 'G'){
      $str[$i] = 6;
    }
    elseif ($str[$i] == 'l'||$str[$i] == 'L'){
      $str[$i] = 1;
    }
    elseif ($str[$i] == 's'||$str[$i] == 'S'){
      $str[$i] = 5;
    }
    elseif ($str[$i] == 't'||$str[$i] == 'T'){
      $str[$i] = 7;
    }
  }
  return $str;
}
Leetspeak('letter');*/



function Leetspeak($str){

  $tab = [
    'A' => 4,
    'a' => 4,
    'B' => 8,
    'b' => 8,
    'E' => 3,
    'e' => 3,
    'G' => 6,
    'g' => 6,
    'L' => 1,
    'l' => 1,
    'S' => 5,
    's' => 5,
    'T' => 7,
    't' => 7,
  ];

    for ($i=0; isset($str[$i]); $i++) {

      foreach ($tab as $key => $value) {
        if ($str[$i] == $key) {
          $str[$i] = $value;
        }
      }
    }
  return $str;
}
$text = Leetspeak('Leet speak');
echo $text;
?>
