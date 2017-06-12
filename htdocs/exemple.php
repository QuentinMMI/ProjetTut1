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
    <script src="../java/planche.js"></script>
</head>

<body class = fondJaune>
<header>
      <a href="index.php"><img id="logoAile" alt="Aile avec le logo dedans" src="images/imgLogoOmbre.png"></a>        
        <nav>
            <a class="policeNav" href="index.php">ACCUEIL</a>
            <a class="policeNav"  href="reglement.php">REGLEMENT</a>
            <a class="policeNav" href="publication.php">PUBLICATIONS</a>
            <a class="policeNav" href="aPropos.php">A PROPOS</a>
            <a class="policeNav" id="participer" href="participer.php">PARTICIPER</a>
            <a class="policeNav" href="">Se connecter</a>
        </nav>
        
        <div id="Modal" class="modal">
            <div class="modal-content">
                <span class="close">X</span>
                    <form action="accueil.php" method="post">
                        Prénom :<br>
                        <input type="text" id="prenom" name="prenom" required="required"><br>
                        Nom :<br>
                        <input type="text" id="nom" name="nom" required="required"><br>
                        Adresse mail :<br>
                        <input type="email" id="adresse" name="adresse" required="required"><br>
                        Mot de passe :<br>
                        <input type="password" id="mdp" name="password" required="required"><br>
                        Confirmer :<br>
                        <input type="password" id="mdpC" name="pasword_verif" required="required"><br>
                        Date de naissance :<br>
                        <input type="date" id="date" name="date" required="required"><br>
                        <input type="submit" value="confirmer" id="submit" name="submit"/>
                    </form>
                <?php
                if(isset($message)){
                    echo $message;
                    }
                ?>
            </div>
        </div>
        <div id="ModalBis" class="modal">
            <div class="modal-contentBis">
                <span class="closeBis">X</span>
                    <form action="php/connexion.php" method="post">
                        Pseudo<br>
                        <input type="text" id="adresse" name="adresse" required="required"><br>
                        Mot de passe :<br>
                        <input type="password" id="mdp" name="password" required="required"><br>
                        <input type="submit" value="confirmer" id="submit"/>
                    </form>
            </div>
        </div>
    </header>
    

<main> 
        
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
