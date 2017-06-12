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
    <script type="text/javascript" src="java/planche.js"></script>
    <script type="text/javascript" src="java/modale.js"></script>
    <script type="text/javascript" src="java/photo.js"></script>
</head>

<body>
<header>
      <a href="index.php"><img id="logoAile" alt="Aile avec le logo dedans" src="images/imgLogoOmbre.png"></a>        
        <nav>
            <a class="policeNav" href="index.php">ACCUEIL</a>
            <a class="policeNav"  href="reglement.php">REGLEMENT</a>
            <a class="policeNav" href="publication.php">PUBLICATIONS</a>
            <a class="policeNav ongletSelect" href="aPropos.php">A PROPOS</a>
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
                    <form action="" method="post">
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
            <h1 class="hAffiche hPub">a Propos</h1>
            <div id="onglets" class="ongletsPub">
            </div>
            <div id="divAPropos">
                <div id="textPropos">
                    <h2>notre equipe</h2>
                    <p>Bienvenue chez Defi Hawk. Cette page est consacrée à notre équipe qui, depuis déjà plusieurs éditions, se charge de vous fournir la meilleure expérience que vous gagniez ou non ! Vous souhaitez savoir qui vous parle sur les réseaux sociaux? Qui redesign le site? Vous êtes au bon endroit!</p>
                    <p>Passe ta souris sur nos photos pour connaître notre rôle.</p>
                </div>
            </div>
            
            <div id="Lequipe">
                <img id="imgThomas1" class="photoEquipe" src="images/imgTho1.png" alt="image de Thomas">
                <img id="imgFlorian1" class="photoEquipe" src="images/imgFlo1.png" alt="image de Florian">
                <img id="imgThomas2" class="photoEquipe" src="images/imgTho2.png" alt="image de Quentin">
                <img id="imgFlorian2" class="photoEquipe" src="images/imgFlo2.png" alt="image de Hugo">
                <img id="imgThomas3" class="photoEquipe" src="images/imgTho3.png" alt="image de Joanne">
            </div>
        </div>
        
        <div id="planche2" class="planche planche2">
            <h1 id ="FAQ">faq</h1>
            <div id="onglets2" class="ongletsPub">
                
            </div>
        </div>
        <div id="planche3" class="planche planche3">
            <h1 id="contact">Contact</h1>
            <div id="onglets3" class="ongletsPub">
                <p>Une question ? N'hesite pas à nous contacter ...</p>
                <form method="post" action="" id="contact">
                    <label for="nomEnvoyeur">Nom</label>
                    <input type="text" id="nomEnvoyeur" name="nomEnvoyeur" placeholder="Nom" required>
                    <label for="mailEnvoyeur">Adresse e-mail</label>
                    <input id="mailEnvoyeur" name="mailEnvoyeur" type="email" placeholder="E-mail" required>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="10" cols="50" placeholder="Message" required></textarea>

                </form>
            </div>
        </div>
        
</main>
    
    <!--------------------------------------------------- FOOTER -------------------------------------------------------------->
    
   <footer id="footer">
        <a href="https://www.kayak.fr/"><img src="images/imgKayak.png" alt="logo Kayak" ></a>
        <a href="http://www.canon.fr/"><img src="images/imgCanon.png" alt="logo Canon" ></a>
        <a href="http://fr-fr.sennheiser.com/"><img src="images/imgSennheiser.png" alt="logo Sennheiser" ></a>
        <a href="https://fr.gopro.com/"><img src="images/imgGoPro.png" alt="logo GoPro" ></a>
        <a href="https://www.credit-agricole.fr/"><img src="images/imgCreditAgricole.png" alt="logo Crédit agricole" ></a>
        <a href="mentionsLegales.html">Mentions Legales</a>
    </footer>

</body>
</html>
