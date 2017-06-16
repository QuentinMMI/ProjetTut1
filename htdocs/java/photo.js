(function(){
document.addEventListener("DOMContentLoaded",commencer);
    
function commencer(evt){
var lesPortraits = document.getElementsByClassName("photoEquipe");
for (var unPortrait of lesPortraits){
    unPortrait.addEventListener("mouseleave", reinitialiserTexte);
    unPortrait.addEventListener("mouseenter", changerTexte);
    }
}

function reinitialiserTexte (evt) {
    document.getElementById("textPropos").innerHTML="<div id='textPropos'><h2>notre equipe</h2><p>Bienvenue chez Defi Hawk. Cette page est consacrée à notre équipe qui, depuis déjà plusieurs éditions, se charge de vous fournir la meilleure expérience que vous gagniez ou non ! Vous souhaitez savoir qui vous parle sur les réseaux sociaux? Qui redesign le site? Vous êtes au bon endroit!</p><p>Passe ta souris sur nos photos pour connaître notre rôle.</p></div>" ;
}

function changerTexte (evt) {
    var textPortrait = document.getElementById("divAPropos");
    var idPortrait = this.id ;
    if (idPortrait == "imgThomas1"){
        textPortrait.innerHTML="<div id='textPropos'><h2>Thomas Furiet</h2><p>Bonjour, je me présente je m’appelle Thomas Furiet j’ai 19 ans et je suis scripte et chargé de communication sur le site. Je vais me charger de toute la rédaction possible et inimaginable, vérifier l’orthographe de mes collègues. Ensuite je vais faire vivre Défi Hawk via les réseaux sociaux.</p></div>";
    }else if(idPortrait =="imgFlorian1"){
        textPortrait.innerHTML="<div id='textPropos'><h2>Hugo Fesselier</h2><p>Moi c’est Hugo et j’ai également 18 ans. Je suis développeur back-end. C’est moi qui gère l’arrière du site avec la base de donnée et l'interaction entre les pages.</p></div>";
    }else if (idPortrait == "imgThomas2"){
        textPortrait.innerHTML="<div id='textPropos'><h2>Joanne Guillou</h2><p>Hello ! Je suis Joanne, la plus jeune de l’équipe ! Je suis chargée de la communication autour de l’évènement Défi Hawk, mais aussi du développement front end et du design !:)</p></div>";
    }else if (idPortrait == "imgFlorian2"){
        textPortrait.innerHTML="<div id='textPropos'><h2>Florian Uguen</h2><p>Salut toi, je m’appelle Florian et je dirige le projet Défi Hawk, enfin dans les faits, c’est plutôt parce qu’il en fallait un, à côté de l’aspect administratif je suis infographiste et je travaille en étroite collaboration avec Quentin et Joanne.</p></div>";
    }else{
        textPortrait.innerHTML="<div id='textPropos'><h2>Quentin Lecharpentier</h2><p>À mon tour de me présenter, moi je m’occupe plus du côté design et ambiance du site (même si tout le monde s’en occupe) je gère aussi l’aspect codage du site, donc si il y a un problème c’est de ma faute :) .. au fait moi c’est Quentin et j’ai 19 ans .</p><p>Je sais faire la cuisine aussi …</p></div>";
    }
}
})()