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
    <script src="java/planche.js"></script>
    <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>
    <script src="java/verif.js"></script>
</head>

<body>
<header>
      <?php require("php/header.php"); ?>
</header>
<body>
    <main id="mainPublier">
 
-
        <div id="planche1" class="planche planche1">
 
            <h1 id="publications">Mes publications</h1>
 
            <p>Pour participer, choisis au moins un type de fichier et dépose le ci-dessous. Tu peux participer une seule fois sans chaque catégorie, si tu souhaites modifier ton travail tu es libre de le faire jusqu'à la date limite du concours.</p>
 
        </div>
 
    </main>
    <footer>
        <?php require("php/footer.php"); ?>
    </footer>
</body>
</html>