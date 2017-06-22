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
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link rel="shortcut icon" href="images/favicon.ico">
        <script src="java/planche.js"></script>
        <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>
        <script src="java/modif.js"></script>
        <script src="java/lot.js"></script>
    </head>
    <body>
        <header>
            <?php require("php/header.php"); ?>
        </header>
        <!------------------------------------------------------------ ACCUEIL ----------------------------------------->
        <main id="pageAccueil">
            <div id="planche1" class="planche planche1">
                <h1 class="accueilTitre hPub">aCCUEIL</h1>
                <div>
                    <div>
                        <h2 id="slogan">Concourez, Voyagez, Revez</h2>
                        <div class="lesTextes">
                            <p id="texteIndex1">Gagne un voyage en Bulgarie et une GoPro Hero 5 pour filmer tes plus beaux moments !</p>
                            <img id="avion" src="images/imgAvion.png" alt="image d'un avion en dessin">
                            <p id="texteIndex2">En realisant une musique, une vidéo ou une affiche avant le 23 Juin 2017</p>
                            <img id="gopro" src="images/imgGoproDessin.png" alt="dessin d'une go pro">
                        </div>
                        <p id="texteBilgre">Ta production doit présenter <strong>la Bulgarie</strong>. Pour en savoir plus, c'est par ici : <a href="reglement.php">Règlement</a></p>
                    </div>
                    <div>
                        <img id="imgAccueil" src="images/imgAccueil.png" alt="images de la Bugarie">
                        <p id="texteDossier"> <strong>CONSULTEZ NOTRE DOSSIER<br> LA BULGARIE <br>POUR EN SAVOIR PLUS</strong></p>

                        <img id="carte" src="images/imgMap.png" alt="Carte plaçant la Bulgarie par rapport à la France">
                    </div>
                </div>
            </div>
            <!----------------------------------------------------------- LOTS ------------------------------->
           <div id="planche2" class="planche planche2 parentTitrePage">
                <h1 id="hLots">LoTS</h1>
                <div id="planche2Bis">
                    <div id="lesPrix">
                        <h2>A gagner</h2>
                        <div>
                            <h3 id="1erPrix" class="lesPrix lesPrixHover" style="cursor:pointer">1 er Prix</h3>
                            <p>> Un voyage en Bulgarie d'une valeur de 5000</p>
                            <p>> Une Gorpro Hero 5 dernière generation</p>
                        </div>
                        <div>
                            <h3 id="prix2" class="lesPrix lesPrixHover" style="cursor:pointer">2 eme Prix</h3>
                            <p>> Une Gopro Hero 5</p>
                            <p>> Un appareil Photo</p>
                            <p>> Une Wonderbox</p>
                        </div>
                        <div>
                            <h3 id="prix3" class="lesPrix lesPrixHover" style="cursor:pointer">3 eme Prix</h3>
                            <p>> Une Gopro Hero 5</p>
                            <p>> Une Wonderbox</p>
                        </div>
                    </div>

                    <div id="lesCaracDesPrix" class="or">
                        <div id="carac">
                            <div id="caracHaut">
                                <div>
                                    <p id="dixNuit"> <span>10</span> Nuits dans un hotel cinq etoiles de Sofia, capitale historique de la Bulgarie</p>
                                    <p class="textLotVoyage">- Petit déjeuner et formule repas déjeuner/repas</p>
                                    <p class="textLotVoyage">- Un guide à disposition pour visiter la ville</p>
                                    <p class="textLotVoyage">- Une voiture personnel</p>
                                    <p class="textLotVoyage">- Un ensemble de réduction pour découvrir les musées et le patrimoine de la Bulgarie </p>
                                    <p class="textLotVoyage">- Une journée "activité à sensation"! </p>
                                </div>
                                <div><img src="images/imgPlage.png" alt="image d'une plage de Bulgarie "></div>
                            </div>
                            <div>
                                <div #goPro5Prix3>
                                    <h3>Une Gopro Hero <span>5</span></h3><img src="images/imgGoproLot.png " id="goproLot" alt="image de Gorpro Hero 5 "></div>
                                <div id="texteGopro">
                                    <p>- Qualité photo, haute résolution 12mpx</p>
                                    <p>- Vidéo 4k</p>
                                    <p> - GPS intégré</p>
                                    <p> - Wifi/Bluetooth</p>
                                    <p>- Résistante à l'eau et aux choques</p>
                                    <p>- Un stabilisateur GoPro KARMA Grip</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!----------------------------------------------------------- LA BULGARIE ------------------------->
        <div id="planche3" class="planche planche3">
            <h1 id="bulgarie">La bulGaRIE</h1>
           <div> 
                <img id="imgBulg1" src="images/imgBulg.png" alt="Image de fond pour la page Bulagarie"> 
                <div> 
                <h2 id="geographie">Geographie</h2> 
                <p id="texteGeo">La Bulgarie est un pays situé au Nord de la Grèce et de la Turquie. Elle est bordée par la mer Noire. Sa capitale, Sofia est également sa plus grande ville avec 1.4 million d’habitants (⅕ de la population totale de la Bulgarie). Le pays a un IDH élevé (0.777). 
                Sa langue principale est le bulgare (c’est d’ailleurs le seul pays où elle est langue principale, même si d’autres pays parlent le bulgare).</p> 
                </div> 
                <h2 id="tourisme">Tourisme</h2> 
                <p id="texteTourisme">Chaque année, la Bulgarie accueille 8.9 millions de touristes, principalement des pays Européens frontaliers, pour sa culture et son vin. 
                </p> 
                <div> 
                <img id="imgBulg2" src="images/imgBulg2.png" alt="Photo de la bulgarie"> 
                <img id="bateau" src="images/imgBateau.png" alt="Dessin d'infographie d'un bateau"> 
                </div> 
            </div> 
</div>
</main>
 
    <!--------------------------------------------------- FOOTER -------------------------------------------------------------->
    
       <footer>
        <?php require("php/footer.php"); ?>
        </footer>
    <script src="java/jquery-3.2.1.js"></script>
    <script src="java/verif.js"></script>
</body>
</html>



