document.addEventListener("DOMContentLoaded", initialiser);

  function initialiser(evt) {
      var mdp1 = document.getElementById("mdpI");
      var mdp2 = document.getElementById("mdpIc");
      //L'événement change est généré lorsqu'on quitte la zone et que le contenu a évolué entre notre entrée dans le champ et la sortie.
      mdp1.addEventListener("change", verifier);
      mdp2.addEventListener("change", verifier);
   }

   function verifier(evt) {
      var mdp1 = document.getElementById("mdpI");
      var mdp2 = document.getElementById("mdpIc");
      mdp2.setCustomValidity(""); //On remet à vide le message d'erreur
      //On vérifie d'abord s'ils ont bien validé les controles de format
      if (mdp1.checkValidity() && mdp2.checkValidity()) {
           if (mdp1.value != mdp2.value) { //on vérifie s'ils sont différents
                 mdp2.setCustomValidity("Les 2 mots de passe ne sont pas identiques");
           }
      }
   }