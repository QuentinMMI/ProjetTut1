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
    <script src="java/modif.js"></script>
</head>

<body>
<header>
      <?php require("php/header.php"); ?>
</header>
<main> 

    <div id="coucou">
            <h1>Poster votre affiche</h1>
            <div id="formulairePoster">
                <form method="post">
                    <label for="nomEnvoyeur">Nom et prénom</label>
                    <input type="text" name="nomEnvoyeur" placeholder="Nom et prénom" required>
                    <label for="objet">objet</label>
                    <input name="objet" type="text" placeholder="Objet" required>
                    <label for="mailEnvoyeur">Adresse e-mail</label>
                    <input name="mailEnvoyeur" type="email" placeholder="E-mail" required>
                    <label for="message">Message</label>
                    <textarea name="message" rows="10" cols="50" placeholder="Description" required></textarea>
                   <input type="submit" value="Envoyer" style="cursor:pointer">

                </form>
            </div>
    </div>
        
</main>
    
   <footer id="footer">
        <?php require("php/footer.php"); ?>
    </footer>

</body>
</html>
