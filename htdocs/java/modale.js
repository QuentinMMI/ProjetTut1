var btn ;
var divFond;
var span;
var fermer;
document.addEventListener("DOMContentLoaded",commencer);

function commencer (evt){
    divFond = document.getElementById("Modal");
    btn = document.getElementById("btnCo");
    span = document.getElementById("close");
    fermer=document.getElementById("divClose");
    span.addEventListener("click",partir);
    btn.addEventListener("click",arriver);
}

function arriver (evt){
    divFond.style.display = "block";
    window.setTimeout(apparition,300);
}

function partir (evt){
    divFond.style.display = "none";
    fermer.style.left="0px";
}

function apparition (evt){
    fermer.style.left="-80px";
}