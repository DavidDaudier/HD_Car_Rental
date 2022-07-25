<?php

    // Connexion a la base de donnees
        require('../php/conn.php');

     // Traitement de la suppression d'un message
        if(isset($_GET['chatSupp'])){
            $id = $_GET['chatSupp'];

            // Supprimer la donnee dans la table articles 
            $supp = $db->prepare('DELETE FROM minichat WHERE id=?');
            $supp->execute([$id]);
        }

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="../css/styleChat.css">
        <title>Multi - chat</title>

        <!-- Font pour les textes -->
        <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- <img src="../img/banner_chat.gif" class="img-gif"> -->
        <div class="form">
            <!-- <h1>Multi-chat</h1> -->

            <div class="message">
                <?php
                    $afficher = $db->query('SELECT *FROM minichat ORDER BY id DESC LIMIT 10');
                    while($donnees = $afficher->fetch()){ ?>
                    
                        <p>     
                            <!-- Supprimer -->
                            <a href="minichat.php?chatSupp=<?php echo $donnees['id'];?>" class="btn-supprimer">X
                            </a>

                            <strong> <?php echo $donnees['pseudo']; ?> </strong> 
                            : <?php echo $donnees['message']; ?><br>
                            <small> <?php echo $donnees['date_heure']; ?> </small>      
                        </p>
                <?php }

                    // Termine le traitement de la requete
                    $afficher->closeCursor();
                ?>
            </div>

            <img src="../img/tel3.png" class="tel1">
            <a href="#infos" class="param"><i class="fas fa-user-cog"></i></a>

            <!--  A F F I C H E    I N F O R M A T I O N  -->
            <div class="infos" id="infos">
                <a href="" class="btn-fermer"><span>X</span></a>
                <div class="infos-chat">

                    <a href="#users"><i class="fas fa-users"></i>Utilisateurs</a>
                    <!-- Requete pour afficher liste utilisateurs -->
                    <div class="users" id="users">
                        <a href="" class="btn-fermer"><span>X</span></a>
                        <?php
                            $afficher = $db->query('SELECT *FROM users');
                            while($donnees = $afficher->fetch()){ ?>
                            <p class="p-users">
                                <strong><i class="fas fa-user"></i> <?php echo $donnees['pseudo']; ?> </strong>    
                            </p>
                        <?php }

                            // Termine le traitement de la requete
                            $afficher->closeCursor();
                        ?>
                    </div>

                    <a href="index.php#formulaire_inscrire"><i class="fas fa-user-plus"></i>Nouv. compte</a>

                    <a href="../php/index.html"><i class="fas fa-door-open"></i>Deconnecter</a>
                </div>
            </div>

            <form method="POST" action="minichat_post.php">
                <!-- <label>Votre pseudo</label> -->
                <input type="text" name="pseudo" required placeholder="Surnom" class="pseudo">
                <!-- <label>Votre message</label> -->
                <input type="text" name="message" required placeholder="Message">
                <!-- <i class="fas fa-paper-plane" name="btn-submit" class="ok"></i> -->
                <input type="submit" name="btn-submit" value="OK" class="ok">
            </form>
        </div>
    </body>
</html>