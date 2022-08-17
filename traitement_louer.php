<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Recuperation l'ID de la voiture
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $recup = $db->prepare("SELECT *FROM voiture WHERE id = ?");
        $recup->execute([$id]);
        $donnees = $recup->fetch();
    }

   

        // header('Location:location.php');

    // }
?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title></title> -->
        <link rel="stylesheet" href="./css/styleTraitement.css">
        <link rel="stylesheet" href="./css/all.min.css">

        <!-- font pour les boutons submit & reset -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

        <!-- Font type Utilisateur-->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <form action="traitement_louer.php" method="GET" class="form">
            <br>
            <label for="">Marque</label>
            <input type="text" name="marque"  value="<?php echo $donnees['marque'] ?>" class="input-marque"><br><br>
            <label for="">Modèle</label>
            <input type="text" name="modele"  value="<?php echo $donnees['modele'] ?>" class="input-modele"><br></br>
            <label for="">Immatricule</label>
            <input type="text" name="immatricule"  value="<?php echo $donnees['immatricule'] ?>" class="input-imm"><br></br>
            <input type="text" required placeholder="Saisir le numéro de votre carte de credit" name="noCarte" class="input-carte-credit"><br></br>
            <label for=""> Date de Début</label>
            <input type="date" required placeholder="Date achat" name="date_debut" class="input-date-d"><br><br>
            <label for="">Date de Fin</label>
            <input type="date" required placeholder="Date achat" name="date_fin" class="input-date-f"><br><br></br>

            
            <input type="submit" value="Continuer votre réservation" name="louer_voiture" class="input-submit"></br></br>

            

            <?php

                if(isset($_GET['louer_voiture'])){

                    // Declaration des variable
                    $marque = $_GET['marque'];
                    $modele = $_GET['modele'];
                    $immatricule = $_GET['immatricule'];
                    $noCarte = $_GET['noCarte'];
                    $date_debut = $_GET['date_debut'];
                    $date_fin = $_GET['date_fin'];
                    $min = 100000000;
                    $max = 800000000;
                    $code = rand($min, $max);


                    // Condition pour que la date debut doit etre inferieur a la date fin
                    if($date_debut >= $date_fin){
                        echo '<center style="color:red;font-family: Quicksand, sans-serif;font-size: 12px;"><span> Désolé!!! La date du début doit-etre inférieur a la date de fin </span></center>';
                    }

                    //  Condition pour que le numero de la carte de credit n'existe pas
                    // if(($noCarte == $noCarte) ){
                    //     echo '<center style="color:red;font-family: Quicksand, sans-serif;font-size: 12px;"><span> Désolé!!! Le numero de la carte de credit existe déja. <br/><br/></span></center>';
                    // }
                    
                    else{

                        // Insertion des donnees dans la base de donnees
                        $req = $db->prepare("INSERT INTO voiture_louer(immatricule, marque, modele, noCarte, date_debut, date_fin, code_recuperation, heure_louer)VALUES(:immatricule, :marque, :modele, :noCarte, :date_debut, :date_fin,:code_recuperation, NOW())");

                        $req->execute([
                            'immatricule'=> $immatricule,
                            'marque'=> $marque,
                            'modele'=>$modele,
                            'noCarte'=>$noCarte,
                            'date_debut'=>$date_debut,
                            'date_fin'=>$date_fin,
                            'code_recuperation'=>$code
                            
                        ]);

                        echo '<center style="color:green;font-family: Quicksand, sans-serif;font-size: 12px;"><span>Voiture louer avec succès<br/>Passez a notre local pour récupérer le véhicule </span></center>';
                        echo '<br/> <center style="color:black;font-family: Quicksand, sans-serif;font-size: 14px;">votre code est : '.$code.'</center>';

                    }    
            
                }

            ?>

            <center><a href="location.php">
                <i class="fas fa-sign-out-alt"></i>
            </a></center>

        </form>
                
        <img src="./img/voitures/Audi.png" class="img-traitement">
    </body>
</html>