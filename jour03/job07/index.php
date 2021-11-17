<?php

$str = 'Certaines choses changent, et d autres
ne changeront jamais';


for($i = 0; isset($str[$i]); $i += 2){
  echo ( $str[$i] );
}

?>
