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
        if (userActif != null){
                userActif.style.fontFamily = "KayakSansLight";
        }
        var idUser = this.dataset.user;
        var profil = document.getElementById("profilUser");
        this.style.fontFamily = "KayakSansBold";
        userActif=this;
        profil.innerHTML ="<?php $sql = 'SELECT NomUser, PrenomUser, AdresseMail, DateNaissance FROM UTILISATEUR ORDER BY NomUser WHERE IdUser = "+idUser+"'; $statement = $pdo->query($sql); $profil = $statement->fetch(PDO::FETCH_ASSOC); echo ($profil[NomUser])";
    }

}());