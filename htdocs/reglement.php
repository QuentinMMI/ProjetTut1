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
    <script src="java/modif.js"></script>
</head>
<body>
<header>
      <?php require("php/header.php"); ?>
</header>
<main class="fondRouge" id="fondReglement">
            <h1 class="titreReglement"> Les Regles Du Concours</h1>
            <div class="positionRegle">
                <div>
                    <div id="libreDroit">
                        <p id="texteLibreDroit">Pour participer tu dois avoir 16 ans ou plus. Ta production est libre de droit commercial et respecte les règles ci-dessous, bonne chance! </p>
                    </div>
                    <div id="partieGauche">
                        <div id="videoMention">
                            <div class="carreRegle" id="videoRegle">
                                <h2>Video</h2>
                                <p>1 à 3 min max</p>
                                <p>Bande son obligatoire</p>
                                <p>Une qualité HD 720p minimum</p>
                                <p>Upload sur Youtube en non répértoriée </p>
                            </div>
                            <div id="infoMention">
                                <p id="lienMention"> Tu souhaites en savoir plus, consulte les <a href="mentionsLegales.php">mentions légales</a> </p>
                            </div>
                        </div>
                        <div id="afficheSon">
                            <div class="carreRegle" id="afficheRegle">
                                <h2>Affiche</h2>
                                <p>Un poids maximum de 750 Ko</p>
                                <p>Format 2500 X 3000 minimum</p>
                            </div>
                            <div class="carreRegle" id="sonRegle">
                                <h2>Musique/son</h2>
                                <p>1 à 3 min max</p>
                                <p>mp3</p>
                                <p>Une qualité son optimale en stéréo</p>
                                <p>Upload sur SoundCloud en privé</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="partieDroite">
                    <!--
    <div id="bulleMascotte">
        <p>Clique sur les points de la TIMELINE à gauche et découvre les dates clefs du concours =></p>
    </div> -->

                    <h2 id="titreDeroulement">Deroulement du concours</h2>

                    <div class="entries">
                        <div class="entry">
                            <div class="title" id="premierSept">
                                <p>1er Sept</p>
                            </div>
                            <div class="bodyRegle">
                                <p>Annonce du pays</p>
                            </div>
                        </div>
                        <div class="entry">
                            <div class="title titleDeux">
                                <p>2 Sept</p>
                            </div>
                            <div class="bodyRegle">
                                <p>Du 2 Septembre au 30 Octobre, dépose ton chef d'oeuvre sur le site du concours!</p>
                            </div>
                        </div>
                        <div class="entry">
                            <div class="title big titleDeux">
                                <p>1er Novembre</p>
                            </div>
                            <div class="bodyRegle">
                                <p>La phase de vote débute pour les jury et le public</p>
                            </div>
                        </div>
                        <div class="entry">
                            <div class="title titleDeux">
                                <p>1er Décembre</p>
                            </div>
                            <div class="bodyRegle">
                                <p>Les gagnants sont annoncés!</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </main> 
<footer>
    <?php require("php/footer.php"); ?>
</footer>
    <script src="java/jquery-3.2.1.js"></script>
    <script src="java/verif.js"></script>
</body>
</html>