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
    <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>
    <script type="text/javascript" src="java/photo.js"></script>
    <script type="text/javascript" src="java/planche.js"></script>
    <script src="java/verif.js"></script>
</head>

<body>
<header>
      <?php require("php/header.php"); ?>
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
    
    
    <!-----------------------------------CONTACT-------------------------------->
    <div id="planche3" class="planche planche3">
            <h1 id="contact">Contact</h1>
            <div id="ContenuContact">
                <p id="question">Une question ? N'hesite pas a nous contacter ...</p>
                <form method="post" action="php/envoiMail.php" id="FormContact">
                    <label for="nomEnvoyeur">Nom et prénom</label>
                    <input type="text" id="nomEnvoyeur" name="nomEnvoyeur" placeholder="Nom" required>
                    <label for="objet">objet</label>
                    <input id="objet" name="objet" type="text" placeholder="Objet" required>
                    <label for="mailEnvoyeur">Adresse e-mail</label>
                    <input id="mailEnvoyeur" name="mailEnvoyeur" type="email" placeholder="E-mail" required>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="10" cols="50" placeholder="Message" required></textarea>

                   <input type="submit" value="Envoyer" style="cursor:pointer">

                </form>
            </div>
    </div>
        
</main>
    
    <!--------------------------------------------------- FOOTER -------------------------------------------------------------->
    
   <footer id="footer">
        <?php require("php/footer.php"); ?>
    </footer>

</body>
</html>
