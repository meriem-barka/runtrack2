<?php

    //connectez-vous à la base de données “jour08” l’aide d’une requête SQL
    $bdd = mysqli_connect("localhost", "root", "root", "jour08");

    //récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans. 
    $sql = mysqli_query ($bdd, "SELECT prenom, nom, naissance, sexe, email   FROM etudiants WHERE naissance > '2003-11-29'");
    $result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

    //Affichez le résultat de cette requête dans un tableau html.
?>

<!DOCTYPE html >
    <html>
        <body>
            <table>
                <thead>
                    <tr> 
                        <th>prenom</th>
                        <th>nom</th>
                        <th>naissance</th>
                        <th>sexe</th>  
                        <th>email</th>   
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