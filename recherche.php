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
        <!--  =========  L E S   M E T A T S   D O N N E E S  ========= -->
        <title>HD Car Rental | Recherche</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/styleRech.css" type="text/css">
        <link rel="stylesheet" href="./css/all.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
        
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />

         <!-- Font pour liste voitures disponible -->
        <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">

        <!-- Font pour les td -->
        <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">

        <!-- Font input et submit barre de recherche -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <!-- ======  E N   T E T E  ====== -->
        <div class="hero_area3 bg-color">
            <!-- header section strats -->
            <header class="header_section">
              <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                  <a class="navbar-brand" href="index.html">
                    <img src="img/voitures/logo.png" alt="" /><span>
                      HD Car Rental
                    </span>
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
        
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.html"> Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="service.html"> Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="location.php"> Location</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="recherche.php"> Recherche </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html"> Contact </a>
                        </li>
                      </ul> 
                    </div>
                  </div>
                </nav>
              </div>
            </header>
        </div>
        
        

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
                                            <td> <img src="./img/voitures/<?php echo $donnees['images']; ?>" class="img-voiture"> </td>
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


        <!-- ======== P I E D   D E  P A G E ======== -->
        <section class="info_section layout_padding">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <h5>
                    A propos
                  </h5>
                  <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Optio, veniam assumenda labore odio dolorum sint explicabo aspernatur autem eligendi, 
                        vel nam consequuntur dolorem ut numquam eos neque enim cumque sed?
                    </p>
                </div>
                <div class="col-md-3">
                  <h5>
                    Adresse
                  </h5>
                  <ul>
                    <li>
                        <img src="img/voitures/adress.png" alt="">Port-au-prince, Haiti, WI
                    </li>
                    <li>
                        <img src="img/voitures/phone.png" alt="">(+509) 4394 7218
                    </li>
                    <li>
                        <a href="#"><img src="img/voitures/mail.png" alt="">haitideveloppeur01@gmail.com</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h5>
                    Menu
                  </h5>
                  <ul>
                    <li>
                      <a href="index.html">Accueil</a> 
                    </li>
                    <li>
                      <a href="service.html">Services</a> 
                    </li>
                    <li>
                      <a href="contact.html">Contact</a> 
                    </li>
                    <li>
                      <a href="location.php">Location</a> 
                    </li>
                    <li>
                      <a href="recherche.php">Recherche</a> 
                    </li>
                    <li>
                        <a href="voiture.html#section-voitures">Show room</a> 
                    </li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <div class="social_container">
                    <h5>
                        Suivez-nous
                    </h5>
                    <div class="social-box">
                      <a href="">
                        <img src="img/voitures/fb.png" alt="">
                      </a>
        
                      <a href="">
                        <img src="img/voitures/twitter.png" alt="">
                      </a>
                      <a href="">
                        <img src="img/voitures/linkedin.png" alt="">
                      </a>
                      <a href="">
                        <img src="img/voitures/instagram.png" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="subscribe_container">
                    <h2>
                        Abonnez-vous
                    </h2>
                    <div class="form_container">
                      <form action="">
                        <input type="email">
                        <button type="submit">
                            S'abonner
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <footer id="footerPrincipal" class="footerPrincipal">
            <div class="hd">
                <p class="txt-center">
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script> Haitian Developers - Tous droit reservés
                </p>
            </div>
        </footer>
    </body>
</html>