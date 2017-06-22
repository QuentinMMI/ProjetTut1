(function(){
"use strict";
    document.addEventListener("DOMContentLoaded", initaliser);
    
    function initaliser (evt){
        var lesPoubelles = document.querySelectorAll(".modifier");
        for (var unePoubelle of lesPoubelles){
            unePoubelle.addEventListener('click', supprimerTravail);
        }
    }
    
    
    function supprimerTravail (evt) {
        var type = this.dataset.type;
        var id = this.dataset.idoeuvre;
        
         var popUp = document.getElementById("popupConfirmation");
        popUp.style.display = 'block';
        var ouiNon = popUp.querySelectorAll("span");
        for (var spanIsh of ouiNon){
            spanIsh.addEventListener('click', function(evt){
                if (this.id == 'non'){
                    popUp.style.display = 'none' ;
                }else{

                    popUp.style.display = 'none' ;
                    //evoie de la requète ajax
                var xhr = new XMLHttpRequest();

                // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
                xhr.open('GET', 'php/AJAX-php/supprimerOeuvre.php?id=' + id  +'&type='+type+' ');

                xhr.addEventListener('load', function() { // On gère ici une requête asynchrone

                    window.alert('Votre travail a bien été supprimé. Vous pouvez dès à présent en poster un nouveau.');
                    location.reload() ; 

                        });

                        xhr.send(null); // La requête est prête, on envoie tout !

                    }
                });
                
                
    }
    }
    
})();