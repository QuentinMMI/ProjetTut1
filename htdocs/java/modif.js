
(function(){
document.addEventListener("DOMContentLoaded",commencer);
function commencer (evt){
    var modifier = document.getElementById("modifier");
    modifier.addEventListener("click",changer);
    var annuler = document.getElementById("annuler");
    annuler.addEventListener("click",retour);
    var mdp= document.getElementById("mdpF");
    mdp.addEventListener("change",verifMdp);
    var mail= document.getElementById("adresseF");
    mail.addEventListener("change",verifMail);
}


function changer (evt){
    var lesP = document.querySelectorAll("#contentI p");
    for (var uneP of lesP){
        uneP.style.display="none";
    }
    var lesTex = document.querySelectorAll("#nomF, #prenomF, #adresseF");
    for (var uneTex of lesTex){
        uneTex.setAttribute('type','text');
    }
    
    document.getElementById("ageF").setAttribute('type','date');
    document.getElementById("modifier").style.display="none";
    document.getElementById("deconnecter").style.display="none";
    document.getElementById("valider").style.display="flex";
    document.getElementById("annuler").style.display="flex";
    document.getElementById("mdpF").setAttribute('type','password');
    document.getElementById("mdpF").placeholder="Confirmer par mot de passe";
}


function retour (evt){
    document.getElementById("valider").style.display="none";
    document.getElementById("annuler").style.display="none";
    document.getElementById("modifier").style.display="flex";
    document.getElementById("deconnecter").style.display="flex";
    document.getElementById("ageF").setAttribute('type','hidden');
    var lesTex = document.querySelectorAll("#nomF, #prenomF, #adresseF, #mdpF");
    for (var uneTex of lesTex){
        uneTex.setAttribute('type','hidden');
    }
    var lesP = document.querySelectorAll("#contentI p");
    for (var uneP of lesP){
        uneP.style.display="block";
    }
    document.getElementById("mdpF").placeholder="•••••••";
}
    
function verifMdp (evt){
    var mdp = document.getElementById("mdpF");
    var valueC = mdp.value;   
    mdp.setCustomValidity("");
    if(mdp.checkValidity()){
        $.ajax("php/AJAX-php/verif5.php",{method:"POST",data:{mdp:valueC},success:verifiermdp})
    }
}

function verifiermdp (infoPhp){
        var mdp=document.getElementById("mdpF");
        if(infoPhp=="false"){
            mdp.setCustomValidity("mot de passe incorrecte");
        }
    }
    
function verifMail (evt){
    var mail = document.getElementById("adresseF");
        var valueC = mail.value;
        mail.setCustomValidity("");
        if(mail.checkValidity()){
            $.ajax("php/AJAX-php/verif6.php",{method:"POST",data:{mail:valueC},success:verifiermail})
        }
}
    
function verifiermail (valeurphp){
        var mail = document.getElementById("adresseF");
        if(valeurphp=="false"){
            mail.setCustomValidity("Ce mail existe déjà ...");
        }
        if(valeurphp=="mail"){
            mail.setCustomValidity("Veuillez renter un mail valide");
        }
    }
})()