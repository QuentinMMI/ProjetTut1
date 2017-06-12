<html>  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEFI HAWK</title>
    <meta name="description" content="Un site concours, tentez de gagner un voyage grace à une production audiovisuelle ! Defi Hawk">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <script src="sjava/planche.js"></script>
    <script src="java/modale.js"></script>
</head>
<body>
<header>
        <a href="index.php"><img id="logoAile" alt="Aile avec le logo dedans" src="images/imgLogoOmbre.png"></a>        
        <nav>
            <a class="policeNav" href="index.php">ACCUEIL</a>
            <a class="policeNav"  href="reglement.php">REGLEMENT</a>
            <a class="policeNav ongletSelect" href="publication.php">PUBLICATIONS</a>
            <a class="policeNav" href="aPropos.php">A PROPOS</a>
            <a class="policeNav" id="participer" href="participer.php">PARTICIPER</a>
            <a class="policeNav" id="btnCo" style="cursor:pointer">Se connecter</a>
        </nav>
        <div id="Modal" class="modal">
            <div class="modal-content">
                <div id="divClose">
                <a id="close" style="cursor:pointer">fermer</a>
                </div>
                <div id="connexion">
                    <h1>ConnExiON</h1>
                    <form action="" method="get">
                        <label for="mailC">Mail</label>
                        <input type="text" id="mailC" name="mailC" required="required">
                        <label for="mdpC">Mot De Passe</label>
                        <input type="text" id="mdpC" name="mdpC" required="required">
                        <input type="submit" value="OK !" id="submitC" name="submit" style="cursor:pointer"/>
                    </form>
                </div>
                <div id="inscrip">
                    <form action="" method="get">
                        <label for="prenomI">Prénom</label>
                        <input type="text" id="prenomI" name="prenomI" required="required">
                        <label for="nomI">Nom</label>
                        <input type="text" id="nomI" name="nomI" required="required">
                        <label for="mailI">Mail</label>
                        <input type="email" id="mailI" name="mailI" required="required">
                        <label for="mdpI">Mot De Passe</label>
                        <input type="password" id="mdpI" name="mdpI" required="required">
                        <label for="mdpIc">Cofirmer</label>
                        <input type="password" id="mdpIc" name="mdpIc" required="required">
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
    <main>
        <div id="planche1" class="planche planche1">
            <h1 class="hAffiche hPub">affiCHES</h1>
            <div id="onglets" class="ongletsPub">
                <button type="button" data-numero="0"></button>
                <button type="button" data-numero="1"></button>
                <button type="button" data-numero="2"></button>
                <button type="button" data-numero="3"></button>
                <button type="button" data-numero="4"></button>
                <button type="button" data-numero="5"></button>
                <button type="button" data-numero="6"></button>
                <button type="button" data-numero="7"></button>
                <button type="button" data-numero="8"></button>
                <button type="button" data-numero="9"></button>
            </div>
            <div class="contenuP" id="contenu1">
                
            </div>
        </div>
        <div id="planche2" class="planche planche2">
            <h1 class="hSon hPub">Sons</h1>
            <div id="onglets2" class="ongletsPub">
                <button type="button" data-numero="0"></button>
                <button type="button" data-numero="1"></button>
                <button type="button" data-numero="2"></button>
                <button type="button" data-numero="3"></button>
                <button type="button" data-numero="4"></button>
                <button type="button" data-numero="5"></button>
                <button type="button" data-numero="6"></button>
                <button type="button" data-numero="7"></button>
                <button type="button" data-numero="8"></button>
                <button type="button" data-numero="9"></button>
            </div>
            <div class="contenuP" id="cont2">
                
            </div>
        </div>
        <div id="planche3" class="planche planche3">
            <h1 class="hVideo hPub">viDEos</h1>
            <div id="onglets3" class="ongletsPub">
                <button type="button" data-numero="0"></button>
                <button type="button" data-numero="1"></button>
                <button type="button" data-numero="2"></button>
                <button type="button" data-numero="3"></button>
                <button type="button" data-numero="4"></button>
                <button type="button" data-numero="5"></button>
                <button type="button" data-numero="6"></button>
                <button type="button" data-numero="7"></button>
                <button type="button" data-numero="8"></button>
                <button type="button" data-numero="9"></button>
            </div>
            <div class="contenuP" id="contenu3">
                
            </div>
        </div>
    </main>
    
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