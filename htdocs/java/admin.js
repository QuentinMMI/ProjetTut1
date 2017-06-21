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
        
        var lespoubelles = document.querySelectorAll(".poubelle");
        for (var poubelle of lespoubelles){
            poubelle.addEventListener('click', SupprimerProfil);
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
            xhr.open('GET', 'php/AJAX-php/afficherUser.php?idUser=' + idUser + '');

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
            document.getElementById("popupConfirmation").innerHTML ="<p>Voulez-vous vraiment supprimer ce profil?</p><span id='oui' style='cursor:pointer'>Oui </span><span id='non' style='cursor:pointer'> Non</span>";
        } else {
            zonePecision.innerHTML = "<h2>Precision sur l'oeuvre</h2><p>Selectionnez une oeuvre.</p>";
            document.getElementById("popupConfirmation").innerHTML ="<p>Voulez-vous vraiment supprimer cette production ?</p><span id='oui' style='cursor:pointer'>Oui </span><span id='non' style='cursor:pointer'> Non</span>";
            
        }
        
        //evoie de la requete AJAX
         var xhr = new XMLHttpRequest();

            // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
            xhr.open('GET', 'php/AJAX-php/choixAdmin.php?type=' + type + '');

            xhr.addEventListener('load', function() { // On gère ici une requête asynchrone

                var chaineEnvoyer = xhr.responseText;
                zoneRendu.innerHTML = chaineEnvoyer; // Et on affiche !
                 
                //remise en place des écouteurs
                var lesUser = document.querySelectorAll(".user");
                for (var unUser of lesUser){
                        unUser.addEventListener("click", selectionUser);
                }
                var lesOeuvres = document.querySelectorAll(".oeuvre");
                for (var uneOeuvre of lesOeuvres){
                    uneOeuvre.addEventListener("click", afficherDetailOeuvre);
                }
                
                                
                
                userActif = null;
              
            });

            xhr.send(null); // La requête est prête, on envoie tout !
        
       
    }
    
function afficherDetailOeuvre (evt){
    var id = this.dataset.idoeuvre; 
    var zoneModif = document.getElementById("zonePecision");
    var type= this.dataset.type;
    if (userActif != null){
            userActif.style.fontFamily = "KayakSansLight";
    }
    this.style.fontFamily = 'KayakSansBold';
    userActif = this;
    
    //evoie de la requète ajax
    var xhr = new XMLHttpRequest();

    // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
    xhr.open('GET', 'php/AJAX-php/afficherOeuvre.php?type=' + type + '&idOeuvre=' + id +'');

    xhr.addEventListener('load', function() { // On gère ici une requête asynchrone

              
            var chaineEnvoyer = xhr.responseText;
            zoneModif.innerHTML = chaineEnvoyer; // Et on affiche !
            var poubelle = document.getElementById("poubelle");
            poubelle.addEventListener('click', SupprimerOeuvre);
            

            });

            xhr.send(null); // La requête est prête, on envoie tout !
}
    
function SupprimerProfil (evt) {
    var ladiv = this.parentElement;
    var idUser = this.previousElementSibling.dataset.user;
    var popUp = document.getElementById("popupConfirmation");
    popUp.style.display = 'block';
    var ouiNon = popUp.querySelectorAll("span");
    for (var spanIsh of ouiNon){
        spanIsh.addEventListener('click', function(evt){
            if (this.id == 'non'){
                popUp.style.display = 'none' ;
            }else{
                popUp.style.display = 'none' ;
                if(idUser != 1){
                   ladiv.remove();
                }
                //evoie de la requète ajax
    var xhr = new XMLHttpRequest();

    // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
    xhr.open('GET', 'php/AJAX-php/supprimeUser.php?id=' + idUser  +'');

    xhr.addEventListener('load', function() { // On gère ici une requête asynchrone

              
            var chaineEnvoyer = xhr.responseText;
            document.getElementById("zonePecision").innerHTML = chaineEnvoyer; // Et on affiche !

            });

            xhr.send(null); // La requête est prête, on envoie tout !
            }
        });
    
    }
    
    
}

    
function SupprimerOeuvre (evt){
    var id = 
    
    
}
}());