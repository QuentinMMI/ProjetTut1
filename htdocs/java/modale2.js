
(function (){
var btn ;
var divFond;
var span;
var fermer;
document.addEventListener("DOMContentLoaded",initModal);

function initModal (evt){
    divFond = document.getElementById("Modal2");
    btn = document.getElementById("connect1");
    span = document.getElementById("sortir");
    span.addEventListener("click",partir);
    btn.addEventListener("click",arriver);
}

function arriver (evt){
    divFond.style.display = "block";
    window.setTimeout(apparition,100);
    btn.addEventListener("click",partir);
    btn.removeEventListener("click",arriver);
}

function partir (evt){
    divFond.style.top = "-100%";
    window.setTimeout(disparition,100); 
}

function apparition (evt){
    divFond.style.top = "10vh"  
}

function disparition (evt){
    divFond.style.display = "none";
    btn.removeEventListener("click",partir);
    btn.addEventListener("click",arriver)
}
    })()