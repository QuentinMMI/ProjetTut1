(function(){document.addEventListener("DOMContentLoaded",initialiser);
    
    var tousLesBoutons;
    var taille;
    var globale;
            
    function initialiser (evt){
        var lesDiv=document.getElementsByClassName("contenu1");
        var divBouton=document.getElementById("onglets");
        var bouton=document.querySelector("#onglets button");
        globale=document.getElementById("#globale");
        taille=lesDiv.length;
        for(var i=1; i != taille;i++){
            var clone=bouton.cloneNode(true);
            clone.dataset.numero=i;
            divBouton.appendChild(clone);
        }
        tousLesBoutons=document.querySelectorAll("#onglets button");
        for(var unBouton of tousLesBoutons){
            unBouton.addEventListener("click",slider);
        }
        }
        
        function slider (evt){
        var bouton=this;
        selectionnerOnglet(bouton);
    }
            
            
    function selectionnerOnglet(ongletASelectionner) {
        tousLesBoutons.classList.remove("selected");
        tousLesBoutons.classList.add("selected");
        var dataToi = ongletASelectionner.dataset.numero;
        var pourcent = 100/taille;
        var decalage = -pourcent * dataToi;
        globale.style.transform="translateY("+decalage+"%)";
    }
}());