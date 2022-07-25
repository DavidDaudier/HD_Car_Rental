<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Affichage menu
        // require_once 'menu_comptable.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title>Document</title> -->
        <!-- <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="../css/style_comptable.css"> -->
        
    </head>
    <body>

         <!-- Recuperation des donnees de la table client dans la base de donnees gestionstock -->
        <?php $response = $db->query('SELECT *FROM voiture'); ?>

        <div class="wrapper">
            <div class="main_container">
                <div class="item">

                    <!-- Affichage de chaque entree une a une -->
                    <h1 class="liste"> - Liste des Clients - </h1></br>
                    <table>
                        <thead>
                            <tr>
                                <th>PHOTO</th>
                                <th>MARQUE</th>
                                <th>MODELE</th>
                                <th>IMMATRICULE</th>
                                <th>PRIX LOCATION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($donnees = $response->fetch()){?>
                                <tr>
                                    <!-- var_dump($donnees); -->
                                    <td> <?php echo $donnees['src'];?></td>
                                    <td> <?php echo $donnees['marque'];?></td>
                                    <td> <?php echo $donnees['modele'];?></td>
                                    <td> <?php echo $donnees['immatricule'];?></td>
                                    <td> <?php echo $donnees['prix_loc'];?></td>
                                </tr>
                            <?php } 
                            
                            // Termine le traitement de la requete
                            $response->closeCursor();
                            ?>
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>