<?php

//connectez-vous à la base de données “jour08”
    $bdd = mysqli_connect('localhost', 'root', 'root', 'jour08');

 //récupérez la superficie totale des étages dans une colonne nommée “superficie_totale”
    $sql = mysqli_query($bdd, "SELECT  SUM(superficiel) AS superficie_totale FROM etage");
    $result = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    //var_dump($result);

 //Affichez le résultat de cette requête dans un tableau html   
?>

<!DOCTYPE html >
    <html>
        <body>
            <table>
                <thead>
                    <tr> 
                        <th>superficie_totale des étages</th> 
                    </tr>
                </thead>

                <tbody>
                    <?php
                        foreach ($result  as $key => $value) {
                            echo'
                                <tr> 
                            ';

                            foreach ($value  as $key => $value2){

                                echo '
                                    <td>'.$value2.'</td>
                                ';
                                }

                                echo'
                                    </tr>
                                ';
                            }
                    ?>
                </tbody>
            </table>
                   
        </body>
    </html>