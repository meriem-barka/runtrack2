<?php

//string
$str="Laplateforme";
$str2="Vive";
$str3="!Vive Laplateforme!";

//concaténation + affichage
echo"Hello La plateforme <br>".$str."<br>" .$str2."<br>" .$str3."<br>";


 //int
$val=6;
echo $val;
echo "<br>";

//$val=$val+4;
$val+=4;
echo $val;
echo "<br>";

//float
$a = 4.8;
$b = 5.0;
$ab = $a+$b;
echo $ab;

//booléen
$myBool=false;
echo $myBool;

$myBool=true;
echo $myBool;
echo "<br>";

?>

<!DOCTYPE html>

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
          <h1>Variables Tableau en PHP</h1>
          <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Var Booléen</td>
            <td>$a_bool</td>
            <td><?php echo "$myBool";?></td>
          </tr>

          <tr>
            <td>Var Entier</td>
            <td>$an_int</td>
            <td><?php echo "$val";?></td>
          </tr>

          <tr>
            <td>Var Chaîne de caractères</td>
            <td>$a_str</td>
            <td><?php echo $str3;?></td>
          </tr>

          <tr>
            <td>Var Nombre à virgule flottante</td>
            <td>$a_float</td>
            <td><?php echo "$ab";?></td>
          </tr>
        </tbody>

        <tfoot>

        </tfoot>
      </table>
    </body>
  </html>
