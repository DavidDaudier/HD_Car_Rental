<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Traitement Rechercher 
    $req = $db->query('SELECT *FROM voiture');
    if(isset($_GET['cle']) AND !empty($_GET['cle'])){
        $recherche = htmlspecialchars($_GET['cle']);
        $req = $db->query('SELECT images, marque, modele, description, immatricule, prix_loc FROM voiture WHERE marque  LIKE "%'.$recherche.'%" OR modele  LIKE "%'.$recherche.'%"');
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HD Car Rental</title>
        <link rel="stylesheet" href="../css/styleRech.css" type="text/css">

         <!-- Font pour liste voitures disponible -->
        <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">

        <!-- Font pour les td -->
        <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">

        <!-- Font input et submit barre de recherche -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <!-- ======  E N   T E T E  ====== -->
        <header class="header">
            <!-- =======  M E N U S  ======= -->
            <center><nav>
                <ul class="menu">
                    <li><a href="index.html" data-hover="Accueil">Accueil</a></li>
                    <li><a href="index.html#section-voitures" data-hover="Voitures">Voitures</a></li>
                    <li><a href="location.php" data-hover="Location">Location</a></li>
                    <li class="active"><a href="#" data-hover="Recherche">Recherche</a></li>
                    <li><a href="loisir.html" data-hover="Loisirs">Loisirs</a></li>
                </ul>
            </nav>
        </header>
        
        

        <div class="contenue">

            <!-- Affichage de chaque entree une a une -->
                    <h1 class="liste"> - Rechercher votre voiture de luxe - </h1></br>

                     <!-- Barre de Recherche -->
                    <center><form method="GET" action="">
                        <input type="search" name="cle" value="Entrer votre recherche" class="recherche">
                        <input type="submit" name="btn-Rech" value="Rechercher" class="submit">
                    </form><br><br></center>

            <div class="contenue_princcipale">
                   
                    <table >
                        <thead>
                            <tr>
                                <th>PHOTO</th>
                                <th>MARQUES</th>
                                <th>MODÈLES</th>
                                <th>DESCRIPTIONS</th>
                                <th>IMMATRICULES</th>
                                <th>PRIX LOCATION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($req->rowCount() > 0){?>
                                    <?php while($donnees = $req->fetch()){?>
                                        <tr>
                                            <!--  var_dump($donnees);  -->
                                            <!-- <td> </td> -->
                                            <td> <img src="../img/voitures/<?php echo $donnees['images']; ?>" class="img-voiture"> </td>
                                            <td> <?php echo $donnees['marque']; ?></td>
                                            <td> <?php echo $donnees['modele']; ?></td>
                                            <td class="description"> <?php echo $donnees['description']; ?></td>
                                            <td> <?php echo $donnees['immatricule']; ?></td>
                                            <td> <?php echo $donnees['prix_loc'] ;?> $</td>
                                            
                                        </tr>
                                    <?php } 
                                    // Termine le traitement de la requete
                                    $req->closeCursor();
                                }
                                 else{ ?>
                                    <center><p style="color:red;">Aucun Vehicule trouvé</p></center><br>
                               <?php }

                                ?>
                        </tbody>
                    </table>
                <!-- </div> -->
            </div>
        </div></center>

    </body>
</html>