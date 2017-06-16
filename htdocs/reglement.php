<?php
session_start();
    header   ("Content-type: text/html; charset=UTF-8");
?>
<html>  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEFI HAWK</title>
    <meta name="description" content="Un site concours, tentez de gagner un voyage grace à une production audiovisuelle ! Defi Hawk">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <script src="java/planche.js"></script>
    <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>
    <script src="java/verif.js"></script>
    <script src="java/modif.js"></script>
</head>
<body>
<header>
      <?php require("php/header.php"); ?>
</header>
<main class="fondJaune" id="fondReglement"> 
            <h1 class="titreReglement"> Les Regles Du Concours</h1> 
            <div class="ligneUnRegle"> 
                <p id="texteLibreDroit">Vous devez avoir 16 ans ou plus et votre production ainsi que les documents utilisés doivent être libres de droit commercial.</p> 
            </div> 
            <div id="videoRegle"> 
                <h2>Video</h2> 
                <p>1 à 3 min max</p> 
                <p>Bande son obligatoire</p> 
                <p>Une qualité HD 720p minimum</p> 
                <p>Uploader sur Youtube en non répértoriée </p> 
            </div>
            <div id="afficheRegle"> 
                <h2>Affiche</h2> 
                <p>Un poid maximum de 750 Ko</p> 
                <p>Format 2500 X 3000 minimum</p> 
            </div> 
            <div id="sonRegle"> 
                <h2>Musique/son</h2> 
                <p>1 à 3 min max</p> 
                <p>mp3</p> 
                <p>Une qualité son optimal en stéréo</p> 
                <p>Uploader sur SoundCloud en privé</p> 
            </div> 
            <div id="regleSon"> 
                <div> 
                    <p id="ilNeVousReste"> Il ne vous reste plus qu'a participer!</p> 
                </div> 
            </div> 
        </main> 
<footer>
    <?php require("php/footer.php"); ?>
</footer>

</body>