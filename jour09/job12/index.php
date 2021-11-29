<?php

//connectez-vous à la base de données “jour08”
    $bdd = mysqli_connect("localhost", "root", "root", "jour08");

//sélectionnez le prenom, le nom et la date de naissance des étudiants qui sont nés entre 1998 et 2018
    $sql = mysqli_query($bdd,"SELECT prenom, nom, naissance FROM etudiants WHERE naissance > '1998-01-01' && naissance < '2018-01-01'");
    $result = mysqli_fetch_all($sql, MYSQLI_ASSOC );
    //var_dump($result);

//Affichez le résultat de cette requête dans un tableau html 
?>

<!DOCTYPE html >
    <html>
        <body>
            <table>
                <thead>
                    <tr> 
                        <th>Les étudiants nés entre 1998 et 2018</th> 
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