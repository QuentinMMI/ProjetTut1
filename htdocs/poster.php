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

    <div>
            <h1 id="coucou">Poster votre <?php echo $_GET['type'];  ?></h1>
                <form id="formulairePoster" method="post">
                    <label for="nomEnvoyeur">Nom et prénom</label>
                    <input class="inputPost" type="text" name="nomEnvoyeur" placeholder="Nom et prénom" required> 
                    <label for="mailEnvoyeur">Adresse e-mail</label>
                    <input class="inputPost" name="mailEnvoyeur" type="email" placeholder="E-mail" required>
                    <input class="inputPost" type="file" name="icone" id="icone">
                    <label class="inputPost" for="message">Description de votre travail</label>
                    <textarea name="description" rows="10" cols="50" placeholder="Description" required></textarea>
                    <input class="inputPost" type="submit" value="Envoyer" style="cursor:pointer">
                </form>
    </div>
<?php 
     require("php/depotImage.php");
?>
</main>
    
   <footer id="footer">
        <?php require("php/footer.php"); ?>
    </footer>

</body>
</html>
