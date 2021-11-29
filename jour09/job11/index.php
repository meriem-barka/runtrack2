<?php

//connectez-vous à la base de données “jour08”
    $bdd = mysqli_connect("localhost", "root", "root", "jour08");

//sélectionnez la capacite moyenne des salles.
    $sql = mysqli_query($bdd,"SELECT AVG(capacite) FROM salles");
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
                        <th>La capacite moyenne des salles</th> 
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