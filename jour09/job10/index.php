<?php

//connectez-vous à la base de données “jour08”
    $bdd = mysqli_connect("localhost", "root", "root", "jour08");

// sélectionnez l’ensemble des informations des salles en les triant par capacite croissant.
    $sql = mysqli_query($bdd,"SELECT nom, capacite  FROM salles ORDER BY capacite ASC");
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
                        <th>Salles par capacite croissant</th> 
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