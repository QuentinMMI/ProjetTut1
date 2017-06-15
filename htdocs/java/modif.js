document.addEventListener("DOMContentLoaded",commencer);

function commencer (evt){
    var modifier = document.getElementById("modifier");
    modifier.addEventListener("click",changer);
    var annuler = document.getElementById("annuler");
    annuler.addEventListener("click",retour);
}


function changer (evt){
    var lesP = document.querySelectorAll("#contentI p");
    for (var uneP of lesP){
        uneP.style.display="none";
    }
    var lesTex = document.querySelectorAll("#nomF, #prenomF, #adresseF, #mdpF");
    for (var uneTex of lesTex){
        uneTex.setAttribute('type','text');
    }
    document.getElementById("ageF").setAttribute('type','date');
    document.getElementById("modifier").style.display="none";
    document.getElementById("deconnecter").style.display="none";
    document.getElementById("valider").style.display="flex";
    document.getElementById("annuler").style.display="flex";
}


function retour (evt){
    
}