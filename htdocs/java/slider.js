(function(){
    document.addEventListener("DOMContentLoaded",initialiser);
    document.addEventListener("DOMContentLoaded",initialiser2);
    document.addEventListener("DOMContentLoaded",initialiser3);
            
    var tousLesBoutons;
    var taille;
    var globale;
    
    var tousLesBoutons2;
    var taille2;
    var globale2;
    
    var tousLesBoutons3;
    var taille3;
    var globale3;
    
    function initialiser (evt){
        var lesDiv=$(".contenu1");
        var divBouton=$("#onglets");
        var bouton=$("#onglets button");
        globale=$("#globale");
        taille=lesDiv.length;
        for(var i=1; i != taille;i++){
            var clone=bouton.clone();
            clone.data("numero",i);
            divBouton.append(clone);
        }
        tousLesBoutons=$("#onglets>button");
        tousLesBoutons.click(slider);
        }
        
    function selectionnerOnglet(ongletASelectionner) {
        tousLesBoutons.removeClass("selected");
        ongletASelectionner.addClass("selected");
        var dataToi = ongletASelectionner.data("numero");
        var pourcent = 100/taille;
        var decalage = -pourcent * dataToi;
        globale.css("transform", "translateY("+decalage+"%)");
    }
            
        function slider (evt){
        var btn = $(this);
        selectionnerOnglet(btn);
    }
            
             
        function initialiser2 (evt){
            var divSon=$(".contenu2");
            var divBouton2=$("#onglets2");
            var bouton2=$("#onglets2 button");
            globale2=$("#globale2");
            taille2=divSon.length;
            for(var i=1; i != taille2;i++){
                var clone2=bouton2.clone();
                clone2.data("numero",i);
                divBouton2.append(clone2);
            }
            tousLesBoutons2=$("#onglets2>button");
            tousLesBoutons2.click(slider2);
        }  
            
        function selectionnerOnglet2(ongletASelectionner) {
            tousLesBoutons2.removeClass("selected");
            ongletASelectionner.addClass("selected");
            var dataToi2 = ongletASelectionner.data("numero");
            var pourcent2 = 100/taille2;
            var decalage2 = -pourcent2 * dataToi2;
            globale2.css("transform", "translateY("+decalage2+"%)");
        }
            
        function slider2 (evt){
            var btn2 = $(this);
            selectionnerOnglet2(btn2);
        }
    
    
        function initialiser3 (evt){
            var divVid=$(".contenu3");
            var divBouton3=$("#onglets3");
            var bouton3=$("#onglets3 button");
            globale3=$("#globale3");
            taille3=divVid.length;
            for(var i=1; i != taille3;i++){
                var clone3=bouton3.clone();
                clone3.data("numero",i);
                divBouton3.append(clone3);
            }
            tousLesBoutons3=$("#onglets3>button");
            tousLesBoutons3.click(slider3);
            
        }
    
    function selectionnerOnglet3(ongletASelectionner) {
            tousLesBoutons3.removeClass("selected");
            ongletASelectionner.addClass("selected");
            var dataToi3 = ongletASelectionner.data("numero");
            var pourcent3 = 100/taille3;
            var decalage3 = -pourcent3 * dataToi3;
            globale3.css("transform", "translateY("+decalage3+"%)");
        }
            
        function slider3 (evt){
            var btn3 = $(this);
            selectionnerOnglet3(btn3);
        }
    
    
}());