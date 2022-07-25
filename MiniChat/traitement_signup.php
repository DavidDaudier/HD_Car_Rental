

     
    <!-- traiment des donnees -->
<?php
    ######################## GESTION DES INCRIPTIONS ################################
    // Connexion a la base de donnees
        require('../php/conn.php');


    if (isset($_POST['signup'])){
        //verfier si username est set
        if(empty($_POST['pseudo']) AND isset($_POST['pass'],$_POST['passConf'])){
            $errors['pseudo'] = true;
            header("Location: index.php?errorName=Entrer votre nom complet");
        }
            //verifier si l'utilistateur a entre un mot de pass
        else if (empty($_POST['pass']) AND isset($_POST['username'],$_POST['passConf'])) {
            $errors['password'] = true;
            header('Location: index.php?errorPass=Vous devez fournir un mot de pass');
        }
            //verfier si mot de pass est confirmer
        else if (empty($_POST['passConf']) AND isset($_POST['username'],$_POST['pass'])) {
            $errors['password'] = true;
            header('Location: index.php?errorPassC=Vous devez confirmer votre mot de pass');
        }
        else{
            
                //recuperation des donnees dans la base de donnees pour tester si ce user existe
                $req = $db->prepare('SELECT * FROM users WHERE pseudo=?');
                $req->execute(array($_POST['pseudo']));
                $existe = $req->fetch();
                if ($existe) {
                    $errors['pseudo'] = true;
                    header("Location: index.php?errorPseudoExiste=Pseudo existe deja!");
                }
            
    
            //verification des deux mots de pass entres sont identiques
            if (isset($_POST['pass'], $_POST['passConf'])) {
                $pass = $_POST['pass'];
                $passConf = $_POST['passConf'];
                if ($pass != $passConf) {
                    $errors['password'] = true;
                    header ('Location: index.php?errorPassConf=Les deux mots de pass entrees sont different!');
                }
            }
            //condition pour un insertion dans la base
            if (! $errors) {
                $req = $db->prepare('INSERT INTO users (pseudo,modpass) VALUES(?,?)');
                $code = password_hash($_POST['pass'], PASSWORD_BCRYPT);
                $req->execute(array($_POST['pseudo'], $code));
                header('Location: index.php?succes=Compte cree');
            }
        }
    }

    ######################## GESTION DE CONNECTION ################################
    if (isset($_POST['login'])){
        // verifier si l'un de ces champs sont vides
        if(empty($_POST['pseudo']) AND isset($_POST['pass'])){
            header('Location: index.php?errorPseudoVide=Veuillez entrer votre pseudo');
        }
        else if(empty($_POST['pass']) AND isset($_POST['pseudo'])){
            header('Location: index.php?errorPassVide=Veuillez entrer votre mot de pass');
        }
        else{
            $pseudo=$_POST['pseudo'];
            $req = $db->prepare('SELECT * FROM users WHERE pseudo=?');
            $req->execute(array($_POST['pseudo']));
            $donnee = $req->fetch();
            $db = false;
            if ($donnee['pseudo'] == $pseudo AND password_verify($_POST['pass'], $donnee['modpass'])){
                $db = true;
                // require_once '../minichat/minichat.php';
                header("Location:../minichat/minichat.php ");
            }
            else if($donnee['pseudo'] !== $pseudo AND password_verify($_POST['pass'], $donnee['modpass'])){
                header("Location: index.php?nonUser=Vous n'avez pas encore un compte! Creez un!");
            }
    
            if (!$db) {
                header("Location: index.php?echec=Mot de pass et email ne correspond pas");
            }     
        }
    }
?>

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
 
