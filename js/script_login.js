
// - - - - -  Declaration des Variables Login/SignUp- - - - - //
  // Contenue principal
  const Contenue_Principal = document.querySelector('#contenue_principal');

  // Contenue a gauche
  const Contenue_Gauche = document.querySelector('#contenue_gauche');

  // Boutons Inscrire et Login dans la contenue a gauche
    const Btn_Inscrire_Gauche = document.querySelector('#btn_inscrire_gauche');
    const Btn_Login_Gauche = document.querySelector('#btn_login_gauche');


// - - - - - Les Evenements - - - - - //
  // A cahque fois qu'on clique sur les boutons d'inscription et de connexion a gauche.
  //Appeler le fonction sur changerFormulaire().
    Contenue_Gauche.addEventListener('click', changerFormulaire);
    Contenue_Gauche.addEventListener('click', changerFormulaire);


// - - - - -  Fonctions - - - - - //
  // Fonction sur le mode de changement du formulaire
    function changerFormulaire(e) {

      // Bouton d'inscription, verifier si l'element cible est a gauche
      if(e.target === Btn_Inscrire_Gauche){
        // Ajout d'une classe [ Mode inscription actif ] sur le contenue principale
        Contenue_Principal.classList.add('mode_inscrire_acitve');
      };

      // Bouton de connexion. Verifier si l'element cible est a gauche
      if(e.target === Btn_Login_Gauche){
        // Supprimer la classe [ Mode inscription actif ] dans le contenue principale
        Contenue_Principal.classList.remove('mode_inscrire_acitve');
      };
  };
