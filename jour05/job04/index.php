<?php

declare (strict_types=1);

function Calcule(int $a, $operation, int $b){

   if ($operation == '+'){
     return $operation = $a + $b;
   }
   elseif ($operation == '-'){
     return $operation = $a * $b;
   }
   elseif ($operation == '*'){
     return $operation = $a * $b;
   }
   elseif ($operation == '%'){
     return $operation = $a % $b;
   }
}

$resultat = Calcule(10,'*',25);
echo $resultat;

?>
