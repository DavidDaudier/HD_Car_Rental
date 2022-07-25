<?php

    // Connexion a la base de donnees
        require('conn.php');

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HD Car Rental</title>
        <link rel="stylesheet" href="../css/styleLoc.css" type="text/css">

        <!--  -->
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

         <!-- Font pour liste voitures disponible -->
        <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">

        <!-- Font pour les td -->
        <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">

    </head>
    <body>
        <!-- ======  E N   T E T E  ====== -->
        <header class="header">
            <!-- =======  M E N U S  ======= -->
            <center><nav>
                <ul class="menu">
                    <li><a href="index.html" data-hover="Accueil">Accueil</a></li>
                    <li><a href="index.html#section-voitures" data-hover="Voitures">Voitures</a></li>
                    <li class="active"><a href="location.php" data-hover="Location">Location</a></li>
                    <li><a href="recherche.php" data-hover="Recherche">Recherche</a></li>
                    <!-- <li><a href="#" data-hover="Chatter">Chatter</a></li> -->
                    <li><a href="loisir.html" data-hover="Loisirs">Loisirs</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- Recuperation des donnees de la table VOITURE dans la base de donnees location -->
        <?php $response = $db->query('SELECT *FROM voiture'); ?>

        <div class="contenue">
            <h1 class="liste"> - Louer la voiture que vous avez toujours rêvé de conduire - </h1></br>
            
            <div class="contenue_princcipale">
                <table>
                    <thead>
                        <tr>
                            <th>PHOTO</th>
                            <th>MARQUES</th>
                            <th>MODÈLES</th>
                            <th>DESCRIPTIONS</th>
                            <th>IMMATRICULES</th>
                            <th>PRIX LOCATION</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Affichage de chaque entree une a une -->
                        <?php while($donnees = $response->fetch()){?>
                            <tr>
                                <!--  var_dump($donnees);  -->
                                <td> <img src="../img/voitures/<?php echo $donnees['images']; ?>" class="img-voiture"> </td>
                                <td> <?php echo $donnees['marque']; ?></td>
                                <td> <?php echo $donnees['modele']; ?></td>
                                <td class="description"> <?php echo $donnees['description']; ?></td>
                                <td> <?php echo $donnees['immatricule']; ?></td>
                                <td> <?php echo $donnees['prix_loc'] ;?> $</td>
                                    
                                <!--  bouton Louer -->
                                <td> 
                                    <a href="traitement_louer.php?id=<?php echo $donnees['id'];?>" class="btn-louer"></i> Louer
                                    </a>
                                </td>
                            </tr>
                        <?php } 
                        
                        // Termine le traitement de la requete
                        $response->closeCursor();
                        ?>
                    </tbody>
                </table>
            </div>
        </div></center>

    </body>
</html>