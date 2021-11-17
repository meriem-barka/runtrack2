<?php

$nombres = 1;

while($nombres <= 100){

  if($nombres % 3 && $nombres % 5 == 0){
    echo "FizzBuzz <br/>";
  }
  /*elseif($nombres % 2 == 0|| $nombres % 6 == 0){
    echo "Fizz <br/>";
  }*/
  elseif($nombres % 3 == 0){
    echo "Fizz <br/>";
  }

  elseif($nombres % 5 == 0){
    echo "Buzz <br/>";
  }

  else {
    echo $nombres . "<br/>";
  }
  $nombres++;
}

?>
