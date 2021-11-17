<?php

$str = 'On n est pas le meilleur quand
on le croit mais quand on le sait.';

$compt1 = 0;
$compt2 = 0;

$dic = [
  'voyelles' => ['a','e','i','o','u','y','A','E','I','O','U','Y'],
  'consonnes' =>[ 'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x','z']
];

for ($i = 0; isset($str[$i]) ; $i++){
  foreach ($dic['voyelles'] as $element){
    if ($element == $str[$i]) {
      $compt1++;
    }
  }

  foreach ($dic['consonnes'] as $element){
    if ($element == $str[$i]) {
      $compt2++;
    }
  }
}
echo $compt1.'<br/>';
echo $compt2;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tableau</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>

  <body>
    <table>
      <thead>
        <tr>
          <th>Voyelles</th>
          <th>Consonnes</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><?php echo $compt1;?></td>
          <td><?php echo $compt2;?></td>
        </tr>
      </tbody>

      <tfoot>

      </tfoot>
    </table>
  </body>
</html>
