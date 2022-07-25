<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="UTF-8">
    <title>Login Multi--Chat</title>

        <!-- Liens CSS et les fonts awesomes -->
        <link rel="stylesheet" href="../css/style_login.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!-- Font pour les autres -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;800;900&display=swap">

        <!-- Font pour les titres -->
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">

        <!-- Font pour le p(contenue a gauche) -->
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">

        <!-- Font pour les boutons contenue a gauche-->
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 

        <!-- font pour les bouton contenue principale -->
        <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap" rel="stylesheet"> 
  </head>
  <body>

    <!-- S E C T I O N    C O N T E N U E   P R I N C I P A L -->
    <div class="contenue_principal" id="contenue_principal">

      <!-- C O N T E N U E   F O R M U L A I R E -->
      <div class="contenue_formulaire">

        <!-- S E C T I O N    C O N N E X I O N -->
          <!-- Formulaire de Connexion -->
          <form method="POST" class="formulaire_login" id="formulaire_login" action="traitement_signup.php">

            <!-- Titre formulaire d'identification -->
            <h1 class="titre_formulaire">Connexion</h1>

            <!-- Partie Nom utilisateur -->
            <div class="input_label">
              <label class="label">
                <input type="text" required name="pseudo" placeholder="Pseudo">
              </label>
              <?php if(isset($_GET['errorPseudoVide'])) { echo $_GET['errorPseudoVide'];} ?>
              <span class="icones"><i class="bx bx-user"></i></span>
            </div>

            <!-- Partie Mot de pass -->
            <div class="input_label">
              <label class="label">
                <input type="password" required name="pass" placeholder="Mot de passe">
              </label>
              <?php if(isset($_GET['errorPassVide'])) { echo $_GET['errorPassVide'];} ?>
              <span class="icones"><i class="bx bx-lock"></i></span>
              <span class="icone_vue"><i class="bx bx-hide"></i></span>
            </div>
            
            <!-- Partie boutton connecter et texte -->
            <button type="submit" class="button_submit" name="login">Connecter</button>
          </form> 
        <!-- F I N    S E C T I O N    C O N N E X I O N -->



        <!-- S E C T I O N   F O R M U L A I R E    D' I N S C R I P T I O N -->
        <form method="POST" class="formulaire_inscrire" id="formulaire_inscrire" action="traitement_signup.php">

          <!-- Titre formulaire d'inscription -->
          <h1 class="titre_formulaire">S'inscrire!</h1>

          <!-- Partie Nom complet -->
          <div class="input_label">
            <label class="label">
              <input type="text"  required name="pseudo" placeholder="Pseudo">
            </label>
            <?php if(isset($_GET['errorName'])) { echo $_GET['errorName'];} ?>
            <span class="icones"><i class="bx bx-user"></i></span>
          </div>

          <!-- Partie Mot de passe -->
          <div class="input_label">
            <label class="label">
              <input type="password" required name="pass" placeholder="Mot de passe">
            </label>
            <?php if(isset($_GET['errorPass'])){ echo $_GET['errorPass']; } ?>
            <span class="icones"><i class="bx bx-lock"></i></span>
            <span class="icone_vue"><i class="bx bx-hide"></i></span>
          </div>

          <!-- Partie Confirmer votre mot de passe -->
          <div class="input_label confirme__password">
            <label class="label">
              <input type="password" required name="passConf" placeholder="Confirmer votre mot de passe">
            </label>
            <?php if(isset($_GET['errorPassConf'])){ echo $_GET['errorPassConf']; } ?>
            <?php if(isset($_GET['errorPassC'])){ echo $_GET['errorPassC']; } ?>
            <span class="icones"><i class="bx bx-lock"></i></span>
            <span class="icone_vue"><i class="bx bx-hide"></i></span>
            <?php if(isset($_GET['succes'])) { echo $_GET['succes'];} ?>
            <?php if(isset($_GET['errors'])) { echo $_GET['errors'];} ?>
          </div>

          <!-- Partie boutton inscrire -->
          <button type="submit" class="button_submit" name="signup">S'inscrire</button>

        </form>
        <!-- F I N   S E C T I O N   F O R M U L A I R E    D' I N S C R I P T I O N -->

      </div>
      <!-- F I N   C O N T E N U E   F O R M U L A I R E -->




      <!-- S E C T I O N   A   G A U C H E -->
      <div class="contenue_gauche" id="contenue_gauche">
        <div class="info_login_gauche">
          <img src="../img/logo_chat_sup.png" alt="Logo Multi chat" width="30%">
          <button id="btn_inscrire_gauche">S'inscrire</button>
        </div>

        <div class="info_inscrire_gauche">
          <img src="../img/logo_chat_sup.png" alt="Logo Multi chat" class="img-g">
          <button id="btn_login_gauche">S'identifier</button>
        </div>
      </div>
      <!-- FI N   S E C T I O N   A   G A U C H E -->

    </div>
    <!-- S E C T I O N    C O N T E N U E   P R O N C I P A L -->
    
    
    <script  src="../js/script_login.js"></script>
    
  </body>
</html>
