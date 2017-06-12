document.addEventListener("DOMContentLoaded",commencer);
    
function commencer(evt){
var lesPortraits = document.getElementsByClassName("photoEquipe");
for (var unPortrait of lesPortraits){
    unPortrait.addEventListener("mouseleave", reinitialiserTexte);
    unPortrait.addEventListener("mouseenter", changerTexte);
    }
}

function reinitialiserTexte (evt) {
    document.getElementById("textPropos").innerHTML="<div id='textPropos'><h2>notre equipe</h2><p>Bienvenue chez Defi Hawk. Cette page est consacrée à notre équipe qui, depuis déjà plusieurs éditions, se charge de vous fournir la meilleure expérience que vous gagniez ou non ! Vous souhaitez savoir qui vous parle sur les réseaux sociaux? Qui redesign le site? Vous êtes au bon endroit!</p><p>Passe ta souris sur nos phot pour connaître notre rôle.</p></div>" ;
}

function changerTexte (evt) {
    var textPortrait = document.getElementById("divAPropos");
    var idPortrait = this.id ;
    if (idPortrait == "imgThomas1"){
        textPortrait.innerHTML="<div id='textPropos'><h2>Thoma img1</h2><p>Il faut toujours viser la lune car en casd'échec vous atteindrez les étoiles</p></div>";
    }else if(idPortrait =="imgFlorian1"){
        textPortrait.innerHTML="<div id='textPropos'><h2>Floriant img1</h2><p>WALLHA c flo</p></div>";
    }else if (idPortrait == "imgThomas2"){
        textPortrait.innerHTML="<div id='textPropos'><h2>thomas2</h2><p>coucou c'est thom 2.0</p></div>";
    }else if (idPortrait == "imgFlorian2"){
        textPortrait.innerHTML="<div id='textPropos'><h2>Floriant 2</h2><p>bite de negre</p></div>";
    }else{
        textPortrait.innerHTML="<div id='textPropos'><h2>MMOIOOIOUT</h2><p>iuhdiuazhemichezmivceivoievoieqhvoiheoivehv jcziucjzc ijzbiuz zibciuzckjdsciuc cezb</p></div>";
    }
}
