(function(){
    
    "use strict";
    document.addEventListener("DOMContentLoaded", initaliser);
    
    var userActif ; //permet de récupérer rapidement le profil affiché
    
    function initaliser (evt){
        var lesUser = document.querySelectorAll(".user");
        var choix = document.querySelectorAll(".typeAafficher");
        for (var unUser of lesUser){
            unUser.addEventListener("click", selectionUser);
        }
        
        for(var unChoix of choix){
            unChoix.addEventListener("click", choisirMenu);
        }
    }

    function selectionUser(evt){
        if (userActif != null){
                userActif.style.fontFamily = "KayakSansLight";
        }
        var idUser = this.dataset.user;
        var profil = document.getElementById("zonePecision");
        this.style.fontFamily = "KayakSansBold";
        userActif=this;
        
        var xhr = new XMLHttpRequest();

            // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
            xhr.open('GET', 'https://projets.iut-laval.univ-lemans.fr/16mmi1pj03/php/AJAX-php/afficherUser.php?idUser=' + idUser + '');

            xhr.addEventListener('load', function() { // On gère ici une requête asynchrone

              
                var chaineEnvoyer = xhr.responseText;
                profil.innerHTML = chaineEnvoyer; // Et on affiche !

            });

            xhr.send(null); // La requête est prête, on envoie tout !
    }
    
    function choisirMenu (evt) {
        var type= this.dataset.type;
        var zoneRendu = document.getElementById("divChoixAdmin");
        var zonePecision = document.getElementById("zonePecision");
        
        if (type == 'user'){
            zonePecision.innerHTML = "<h2>Profil</h2><p>Selectionnez un utilisateur.</p>";
        } else {
            zonePecision.innerHTML = "<h2>Precision sur l'oeuvre</h2><p>Selectionnez une oeuvre.</p>";
            
        }
        
        //evoie de la requete AJAX
         var xhr = new XMLHttpRequest();

            // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
            xhr.open('GET', 'https://projets.iut-laval.univ-lemans.fr/16mmi1pj03/php/AJAX-php/choixAdmin.php?type=' + type + '');

            xhr.addEventListener('load', function() { // On gère ici une requête asynchrone

                var chaineEnvoyer = xhr.responseText;
                zoneRendu.innerHTML = chaineEnvoyer; // Et on affiche !
                 
                //remise en place des écouteurs
                var lesUser = document.querySelectorAll(".user");
                for (var unUser of lesUser){
                        unUser.addEventListener("click", selectionUser);
                }
              
            });

            xhr.send(null); // La requête est prête, on envoie tout !
        
       
    }

}());