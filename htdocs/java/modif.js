document.addEventListener("DOMContentLoaded",commencer);

function commencer (evt){
    var modifier = document.getElementById("modifier");
    modifier.addEventListener("click",changer);
}


function changer (evt){
    var lesP = document.getElementsByTagName("#contentI p");
    for (var uneP of lesP){
        uneP.style.display="none";
    }
    var lesTex = document.getElementsByTagName("#nomF, #prenomF, #adresseF, #mdpF");
}