(function(){
document.addEventListener("DOMContentLoaded", initialiser);

  function initialiser(evt) {
      var mdp1 = document.getElementById("mdpI");
      var mdp2 = document.getElementById("mdpIc");
      var date = document.getElementById("dateI");
      var mail = document.getElementById("mailI");
      var date = document.getElementById("dateI");
      var mailC= document.getElementById("mailC");
      var mdpC = document.getElementById("mdpC");
      mdp1.addEventListener("change", verifier);
      mdp2.addEventListener("change", verifier);
      mail.addEventListener("change",verifier2);
      date.addEventListener("change",verifier3);
      mailC.addEventListener("change",verifier4);
      mdpC.addEventListener("change",verifier5);
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
    
    function verifier2 (evt){
        var mail = document.getElementById("mailI");
        var valueM = mail.value;
        mail.setCustomValidity("");
        if(mail.checkValidity()){
            $.ajax("php/AJAX-php/verif2.php",{method:"POST",data:{mail:valueM},success:verifiermail});
        }
    }
    
    function verifiermail (valeurphp){
        var mail = document.getElementById("mailI");
        if(valeurphp=="false"){
            mail.setCustomValidity("Ce mail existe déjà ...");
        }
    }
    
    function verifier3 (evt){
        this.setCustomValidity("");
        var value = parseInt(this.value);
        var verif = 2017 - value;
        if(verif<16){
            this.setCustomValidity("l'age requis est de 16 ans minimum.");
        }
    }
    
    function verifier4 (evt){
        var value = this.value;
        this.setCustomValidity("");
        if(this.chekValidity()){
            $.ajax("php/AJAX-php/verif3.php",{method:"POST",})
        }
    }
    
})()

