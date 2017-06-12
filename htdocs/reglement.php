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
            <a class="policeNav" href="index.php">ACCUEIL</a>
            <a class="policeNav ongletSelect"  href="reglement.php">REGLEMENT</a>
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
<main class="fondJaune" id="fondReglement">
    <h1 class="titreReglement"> Les Regles Du Concours</h1>
    <p id="texteLibreDroit">Vous avez 16 ans ou plus, votre production est libre de droit commercial et doit être réalisée à partir de documents vous appartenant ou étant libres de droits. </p>
    <div class="LigneUnRegle" >
        <div class="ViSonPass">
            <h2>Video</h2>
            <p>1 à 3 min max</p>
            <p>Bande son obligatoire</p>
            <p>Une qualité HD 720p minimum</p>
            <p>Uploader sur Youtube en non répértoriée </p>
        </div>
        
        <div>
            <img id="passeport" src="images/imgPasseport.png" alt="Image de passeport" >
        </div>
        
        <div class="ViSonPass">
            <h2>Musique/son</h2>
            <p>1 à 3 min max</p>
            <p>mp3</p>
            <p>Une qualité son optimal en stéréo</p>
            <p>Uploader sur SoundCloud en privé</p>
        </div>
        </div>
        <div id="regleAffiche">
            <h2>Affiche</h2>
            <p>Un poid maximum de 750 Ko</p>
            <p>Format 2500 X 3000 minimum</p>
        </div>
        
        <div id="regleSon">
            <img src="images/imgLivre.png" alt="Image de livre" >
        </div>    
        
        <div>
            <p id="ilNeVousReste"> Il ne vous reste plus qu'à participer!</p>
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