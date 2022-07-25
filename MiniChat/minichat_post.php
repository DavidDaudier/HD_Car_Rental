<?php

    // Connexion a la base de donnees
        require('../php/conn.php');


    // Recuperation des donnees entrer par l'utilisateur
        if(isset($_POST['btn-submit'])){
            

            // Insertion des donnees dans la base de donnees
            $req = $db->prepare("INSERT INTO minichat(pseudo, message, date_heure)VALUES(:pseudo,:message,NOW())");

            $req->execute(array(
                'pseudo'=> $_POST['pseudo'],
                'message'=> $_POST['message']
            ));
            
            // rediriger vers la page minichat
            header('Location: minichat.php');
        }
        else{
            // echo "Veuillez remplir tous les champs";
                        }

?>