<?php

//connectez-vous à la base de données “jour08”
    $bdd = mysqli_connect('localhost', 'root', 'root', 'jour08');

//récupérez le nombre total d’étudiants dans une colonne nommée “nb_etudiants”.
    $sql = mysqli_query($bdd, "SELECT COUNT(*)AS nb_etudiants FROM etudiants");
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
                        <th>nb_etudiants</th> 
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