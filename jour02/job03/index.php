<?php

for($Chiffre = 0; $Chiffre <= 100; $Chiffre++){

  if($Chiffre <= 20){
    echo "<i>".$Chiffre."</i>"."<br/>";
  }
  elseif ($Chiffre >= 25 && $Chiffre <=50 && $Chiffre!= 42) {
    echo "<u>".$Chiffre."</u>"."<br/>";
  }
  elseif ($Chiffre == 42) {
    echo "La Plateforme_<br/>";
  }
  else {
    echo $Chiffre."<br/>";
  }
}

?>
