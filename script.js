//confirmation du mot de passe
//Vérifier si le mot de passe et la confirmation sont conformes

const mdp1 = document.querySelector(".mdp1");
const mdp2 = document.querySelector(".mdp2");

mdp2.onkeyup = function () {
  // évennement lorsqu'on écrit dans le champs : confirmation du mot de passe
  message_error = document.querySelector(".message_error");
  if (mdp1.value != mdp2.value) {
    // s'ils sont pas égaux
    // on affiche le message d'erreur
    message_error.innerText = "Les Mots passes ne sont pas conformes";
  }else{
    //On écrit rien dans message
    message_error.innerText="";
  }
};
