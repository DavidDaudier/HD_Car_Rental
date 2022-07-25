<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Affichage menu
        require_once 'menu_adm.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HD Car Rental Adm</title>
        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="style_adm.css">

        <!-- font pour les boutons submit & reset -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        
    </head>
    <body>
        
        <div class="wrapper">
            <div class="main_container">
                <div class="item">
                    <h1 class="liste">Ajouter Voiture</h1>
                    <form enctype="multipart/form-data" action="ajouter_voiture.php" method="POST" class="form">
                        <label for="">Photo</label>
                        <input name="images" type="file"  required placeholder="Choisir un photo voiture" ><br><br><br>
                        <label for="">Marque</label>
                        <input type="text" required placeholder=" Marque" name="marque"><br><br><br>
                        <label for="">Modele</label>
                        <input type="text" required placeholder="Modele" name="modele"><br><br><br>
                        <label for="">Description</label>
                        <input type="text" required placeholder="Description" name="description"><br><br><br>
                        <label for="">Immatricule</label>
                        <input type="text" required placeholder="Immatricule" name="immatricule"><br><br><br>
                        <label for="">Prix location</label>
                        <input type="number" required placeholder="Prix location" name="prix_loc"><br><br><br>
                        
                        <input type="reset" value="Effacer" class="btn-reset">
                        <input type="submit" value="Ajouter" name="ajouter" class="btn-ajouter"></br></br><br>
                    </form>

                    <?php

                    // Recuperation des donnees entrer par l'utilisateur
                        if(isset($_POST['ajouter'])){
                            
                            // Declaration des variable
                            $marque = $_POST['marque'];
                            $modele = $_POST['modele'];
                            $immatricule = $_POST['immatricule'];
                            $prix_loc = $_POST['prix_loc'];
                            $description = $_POST['description'];
                            $image = $_FILES["images"]["name"];
                
                            $destination = "../img/voitures/";
                            $imagePath = strtolower(pathinfo($destination, PATHINFO_EXTENSION));
                            $valid_extensions = array("jpeg","jpg","png","gif","pdf");
                            move_uploaded_file($image, $destination);

                            // Insertion des donnees dans la base de donnees
                            $req = $db->prepare("INSERT INTO voiture(images, marque, modele, immatricule, description, prix_loc)VALUES(:images,:marque,:modele,:immatricule,:description,:prix_loc)");

                        
                            $req->execute([
                                'images'=> $image,
                                'marque'=> $marque,
                                'modele'=>$modele,
                                'description'=>$description,
                                'immatricule'=>$immatricule,
                                'prix_loc'=>$prix_loc
                               
                            ]);
                            
                                
                            echo '<center style="color:green;"><span>Voiture enrégistrer avec succès</span></center>';
                        }
                        else{
                            // echo "Veuillez remplir tous les champs";
                        }
                    ?>

                </div>
            </div>
        </div>
    </body>
</html>