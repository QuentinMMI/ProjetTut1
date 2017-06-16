(function () {
    "use strict";
 window.alert("scipt admin");
document.addEventListener("DOMContentLoaded", initialiser);
    
function initialiser (evt){
    var lesUser = document.querySelectorAll(".boucleAdmin p");
    for (var unUser of lesUser){
        unUser.addEventListener("click", selectionUser);
    }
}
    
function selectionUser(evt){
    var idUser = this.dataset.User;
    var profil = document.getElementById("profilUser");
    this.style.fontFamily = "KayakSansBold";
    window.alert(idUser);
}
    

}());// Exécution de la fonction anonyme.