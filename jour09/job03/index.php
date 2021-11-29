<?php

    //connectez-vous à la base de données “jour08” l’aide d’une requête SQL
    $bdd = mysqli_connect("localhost", "root", "root", "jour08");

      //récupérez le prenom, le nom et la date de naissance des étudiants de sexe féminin.
     $sql = mysqli_query($bdd, "SELECT prenom, nom, naissance, sexe  FROM etudiants WHERE sexe='femme' ");
    $result = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    //var_dump($result);

    //Affichez le résultat de cette requête dans un tableau html.
?>
<!DOCTYPE html>
    <html>
        <body>
            <table>
                <thead>
                    <tr> 
                        <th>prenom</th>
                        <th>nom</th>
                        <th>naissance</th>
                        <th>sexe</th>    
                    </tr>
                </thead>

                <tbody>
                    <?php
                        foreach ( $result as $key => $value) {
                            echo'
                                <tr>
                            ';

                            foreach ($value as $key => $value2) {
                            echo'    
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

