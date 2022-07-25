<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Affichage menu
        // require_once 'menu_vendeur.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title>Entreprise HD</title> -->
        <!-- <link rel="stylesheet" href="../css/style_vendeur.css"> -->
        <link rel="stylesheet" href="../css/all.min.css">

        <!-- font pour les boutons submit & reset -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        
    </head>
    <body>
        
        <div class="wrapper">
            <div class="main_container">
                <div class="item">
                    <h1 class="liste">Ajouter Voiture</h1>
                    <form action="ajouter_voiture.php" method="POST" class="form">
                        <label for="">Photo</label>
                        <input type="file" required placeholder="Choisir un photo voiture" name="image"><br><br>
                        <label for="">Marque</label>
                        <input type="text" required placeholder=" Marque" name="marque"><br><br>
                        <label for="">Modele</label>
                        <input type="text" required placeholder="Modele" name="modele"><br><br>
                        <label for="">Immatricule</label>
                        <input type="text" required placeholder="Immatricule" name="immatricule"><br><br>
                        <label for="">Prix location</label>
                        <input type="number" required placeholder="Prix location" name="prix_loc"><br><br>
                        
                        <input type="reset" value="Effacer" class="btn-reset">
                        <input type="submit" value="Ajouter" name="ajouter" class="btn-ajouter"></br></br>
                    </form>

                    <?php

                    // Recuperation des donnees entrer par l'utilisateur
                        if(isset($_POST['ajouter'])){
                            
                            // $img_voiture = $_FILES['photo_voiture']['tmp_name'];
                            // $dest_img = "img/voitures/".$_FILES['photo_voiture']['name'];
                            // move_uploaded_file($img_voiture, $dest_img);

                            // Declaration des variable
                                $marque = $_POST['marque'];
                                $modele = $_POST['modele'];
                                $immatricule = $_POST['immatricule'];
                                $prix_loc = $_POST['prix_loc'];

                                $image = $_FILES['image']['name'];
                                $destination = "img/voitures/". $image;
                                $imagePath = pathinfo($destination, PATHINFO_EXTENSION);
                                $valid_extensions = array("jpeg","jpg","png","gif","pdf");

                                // $tmp_dir = $_FILES['profile']['tmp_name'];
                                // $imagesSize = $_FILES['profile']['size'];

                                // Direction de l'image
                                // $upload_dir = 'img/voiture/';
                                // $imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
                                // $valid_extensions = array("jpeg","jpg","png","gif","pdf");
                                // $picProfile = rand(1000, 1000000).".".$imgExt;
                                move_uploaded_file($_FILES['image']['tmp_name'], $destination);


                        // Insertion des donnees dans la base de donnees
                            $req = $db->prepare("INSERT INTO voiture(photo, marque, modele, immatricule, prix_loc)VALUE(:photo,:marque,:modele,:immatricule,:prix_loc)");

                            $req->execute([
                                'photo'=> $_POST['image'],
                                'marque'=>$_POST['marque'],
                                'modele'=>$_POST['modele'],
                                'immatricule'=>$_POST['immatricule'],
                                'prix_loc'=>$_POST['prix_loc']
                               
                            ]);
                            echo '<center style="color:green;"><span>Client enrégistrer avec succès</span></center>';
                        }else{
                            // echo "Veuillez remplir tous les champs";
                        }
                    ?>

                </div>
            </div>
        </div>
    </body>
</html>