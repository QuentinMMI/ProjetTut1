(function(){
    
    "use strict";
    document.addEventListener("DOMContentLoaded", initaliser);
    
    var userActif ; //permet de récupérer rapidement le profil affiché
    
    function initaliser (evt){
        var lesUser = document.querySelectorAll(".boucleAdmin>p");
        for (var unUser of lesUser){
            unUser.addEventListener("click", selectionUser);
        }
    }

    function selectionUser(evt){
        if(userActif != null){
            userActif.style.fontFamily = "KayakSansLight";
        }
        var idUser = this.dataset.user;
        var profil = document.getElementById("profilUser");
        this.style.fontFamily = "KayakSansBold";
        userActif = this;
    }

}());