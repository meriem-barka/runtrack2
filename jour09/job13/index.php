<?php

//connectez-vous à la base de données “jour08”
    $bdd = mysqli_connect("localhost", "root", "root", "jour08");

//sélectionnez sélectionnez récupérer le nom des salles et le nom de leur étages
    $sql = mysqli_query($bdd, "SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles INNER JOIN etage ON salles.id_etage = etage.id");
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
                        <th>Récupérer le nom des salles et le nom de leur étage</th> 
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