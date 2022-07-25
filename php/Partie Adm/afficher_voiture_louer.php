<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Affichage menu
        require_once 'menu_adm.php';

     // Traitement Rechercher 
    $req = $db->query('SELECT *FROM voiture_louer');
    if(isset($_GET['cle']) AND !empty($_GET['cle'])){
        $recherche = ($_GET['cle']);
        $req = $db->query('SELECT immatricule, marque, modele, noCarte, date_debut, date_fin, code_recuperation, heure_louer FROM voiture_louer WHERE code_recuperation  LIKE "%'.$recherche.'%"');
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HD Car Rental Adm</title>
        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="styleAfficher.css">
    </head>
    <body>

        <!-- Barre de Recherche -->
        <br/><center><form method="GET" action="">
            <input type="search" name="cle" value="Rech. par code de récupération" class="recherche">
            <input type="submit" name="btn-Rech" value="Rechercher" class="submit">
        </form><br><br></center>

        <!-- Recuperation des donnees de la table client dans la base de donnees gestionstock -->
        <?php $response = $db->query('SELECT *FROM voiture_louer ORDER BY heure_louer ASC'); ?>

        <div class="wrapper">
            <div class="main_container">
                <div class="item">

                    <!-- Affichage de chaque entree une a une -->
                    <h1 class="liste"> - Liste des Voitures Louées- </h1></br>
                    <table>
                        <thead>
                            <tr>
                                <th>IMMATRICULE</th>
                                <th>MARQUE</th>
                                <th>MODELE</th>
                                <th>NO CARTE</th>
                                <th>DATE DEBUT</th>
                                <th>DATE FIN</th>
                                <th>CODE REC</th>
                                <th>DATE & HEURE LOUER</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($req->rowCount() > 0){?>
                                    <?php while($donnees = $req->fetch()){?>
                                        <tr>
                                           <td> <?php echo $donnees['immatricule']; ?> </td>
                                            <td> <?php echo $donnees['marque']; ?>      </td>
                                            <td> <?php echo $donnees['modele']; ?>      </td>
                                            <td> <?php echo $donnees['noCarte']; ?>     </td>
                                            <td> <?php echo $donnees['date_debut'] ;?>  </td>
                                            <td> <?php echo $donnees['date_fin'] ;?>    </td>
                                            <td> <?php echo $donnees['code_recuperation'] ;?>    </td>
                                            <td> <?php echo $donnees['heure_louer']; ?> </td>
                                        </tr>
                                    <?php } 

                                    // Termine le traitement de la requete
                                    $req->closeCursor();
                                }
                                 else{ ?>
                                    <center><p style="color:red;">Code introuvable</p></center><br>
                               <?php }

                                ?>
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>