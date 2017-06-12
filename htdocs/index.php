<?php
   header   ("Content-type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html>  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEFI HAWK</title>
    <meta name="description" content="Un site concours, tentez de gagner un voyage grace à une production audiovisuelle ! Defi Hawk">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <script src="java/planche.js"></script>
    <script src="java/modale.js"></script>
    <script src="java/verif.js"></script>
</head>

<body>
<header>
      <a href="index.php"><img id="logoAile" alt="Aile avec le logo dedans" src="images/imgLogoOmbre.png"></a>        
        <nav>
            <a class="policeNav ongletSelect" href="index.php">ACCUEIL</a>
            <a class="policeNav"  href="reglement.php">REGLEMENT</a>
            <a class="policeNav" href="publication.php">PUBLICATIONS</a>
            <a class="policeNav" href="aPropos.php">A PROPOS</a>
            <a class="policeNav" id="participer" href="participer.php">PARTICIPER</a>
            <?php
              if(isset($_SESSION['id']))
              {
              ?>
            <a class="policeNav" id="btnCo" style="cursor:pointer">Bonjour !</a>
            <?php
              }else
              {
              ?>
           <a class="policeNav" id="btnCo" style="cursor:pointer">Se connecter</a>
            <?php
              }
              ?>
        </nav>
         <div id="Modal" class="modal">
            <div class="modal-content">
                <div id="divClose">
                <a id="close" style="cursor:pointer">fermer</a>
                </div>
                <div id="connexion">
                    <h1>ConnExiON</h1>
                    <form action="php/connexion.php" method="post">
                        <label for="mailC">Mail</label>
                        <input type="text" id="mailC" name="mailC" required="required">
                        <label for="mdpC">Mot De Passe</label>
                        <input type="password" id="mdpC" name="mdpC" required="required">
                        <input type="submit" value="OK !" id="submitC" name="submit" style="cursor:pointer"/>
                    </form>
                </div>
                <div id="inscrip">
                    <form action="php/register.php" method="post">
                        <label for="prenomI">Prénom</label>
                        <input type="text" id="prenomI" name="prenomI" required="required" size="30" pattern="[a-zA-Z '-]{2,}" title="Cette zone ne doit contenir  que les caractères alphabétiques,l'espace, l'apostrophe ou le tiret.">
                        <label for="nomI">Nom</label>
                        <input type="text" id="nomI" name="nomI" required="required" size="30" pattern="[a-zA-Z '-]{2,}" title="Cette zone ne doit contenir  que les caractères alphabétiques,l'espace, l'apostrophe ou le tiret.">
                        <label for="mailI">Mail</label>
                        <input type="email" id="mailI" name="mailI" required="required">
                        <label for="mdpI">Mot De Passe</label>
                        <input type="password" id="mdpI" name="mdpI" required="required" minlength="5">
                        <label for="mdpIc">Confirmer</label>
                        <input type="password" id="mdpIc" name="mdpIc" required="required" minlength="5">
                        <label for="dateI">Date de naissance</label>
                        <input type="date" id="dateI" name="dateI" required="required" value="">
                        <input type="checkbox" id="CGU" name="CGU" value="1">
                        <label for="CGU">Accepter le <a href="mentionsLegales.php">CGU</a></label>
                        <input type="submit" value="Valider" id="submit" name="submit" style="cursor:pointer"/>
                    </form>
                    <h1>S'InsCrirE</h1>
                </div>
            </div>
        </div>
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
                    <img id="imgAccueil" src="images/imgPhotoAccueil.png" alt="images de la Bugarie">
                    <p class="texteImg">Consultez notre dossier </br>sur la Bulgarie </br>pour en savoir plus</p>
                    
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
            <div class="divBas"><img src="images/imgBulgarie4.png"></img></div>
        </div>
<!----------------------------------------------------------- LA BULGARIE ------------------------->
        <div id="planche3" class="planche planche3">
            <h1 id="bulgarie">La bulGaRIE</h1>
           
           <p class="descriptionBulgarie">La Bulgarie est un pays situé au Nord de la Grèce et de la Turquie. Il est bordé par la mer Noire. <br><br>
           Sa capitale, Sofia est également sa plus grande ville avec 1.4 million d’habitants (⅕ de la population totale de la Bulgarie). Le pays a un IDH élevé (0.777).<br>
Sa langue principale est le bulgare (c’est d’ailleurs le seul pays où elle est langue principale, même si d’autres pays parlent le bulgare).<br><br>Chaque année, la Bulgarie accueille 8.9 millions de touristes, principalement des pays Européens frontaliers, pour sa culture et son vin.
</p>
        </div>
</main>


</main>
    
    <!--------------------------------------------------- FOOTER -------------------------------------------------------------->
    
   <footer>
    <a href="http://fr-fr.sennheiser.com/"><img src="images/imgSennheiser.png" alt="logo sennheiser" ></a>
    <a href="https://www.kayak.fr/"><img src="images/imgKayak.png" alt="logo Kayak" ></a>
    <a href="http://www.canon.fr/"><img src="images/imgCanon.png" alt="logo Canon" ></a>
    <a href="http://fr-fr.sennheiser.com/"><img src="images/imgSennheiser.png" alt="logo Sennheiser" ></a>
    <a href="https://fr.gopro.com/"><img src="images/imgGoPro.png" alt="logo GoPro" ></a>
    <a href="https://www.credit-agricole.fr/"><img src="images/imgCreditAgricole.png" alt="logo Crédit agricole" ></a>
    <a href="mentionsLegales.html">Mentions legales</a>
</footer>

</body>
</html>



