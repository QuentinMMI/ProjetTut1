
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
    <link rel="shortcut icon" href="images/favicon.ico">
    <script src="java/planche.js"></script>
    <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>
    <script src="java/modif.js"></script>
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
                <div class="divHaut">
                    <div class="divImgLots"> <img src="images/imgBulgarie3.png"></div>
                    <h2 class="titrePage">Tentez de gagner :</h2>
                    <div class="divImgLots"> <img src="images/imgBulgarie5.png"></div>
                </div>
                <div class="divBas">
                    <div class="imgDivBas">
                        <img src="images/imgBulgarie4.png">
                    </div>
                    <div class="podium">
                        <table id="ladder">
                            <tr>
                                <td>
                                    <img src="images/imgLots2.png" alt="Un appareil photo Canon EoS 80D + une GoPro Hero5 et une wonderbox">
                                    <div id="podium1">
                                        <p>2</p>
                                        <p>Un appareil photo Canon EoS 80D + une GoPro Hero5 et une wonderbox</p>
                                    </div>
                                </td>
                                <td>
                                    <img src="images/imgLots1.png" alt="une GoPro Hero5 et un voyage en bulgarie">
                                    <div id="podium0">
                                        <p>1</p>
                                        <p>une GoPro Hero5 et un voyage en bulgarie</p>
                                    </div>
                                </td>
                                <td>
                                    <img src="images/imgLots3.png" alt="Une GoPro Hero5 et une wonderbox">
                                    <div id="podium2">
                                        <p>3</p>
                                        <p>Une GoPro Hero5 et une wonderbox</p>
                                    </div>
                                </td>
                            </tr>
                        </table>
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
    <script src="java/verif.js"></script>
</main>
 
    <!--------------------------------------------------- FOOTER -------------------------------------------------------------->
    
   <footer>
    <?php require("php/footer.php"); ?>
</footer>

</body>
</html>
