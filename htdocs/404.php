<?php
    session_start();
    header ("Content-type: text/html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEFI HAWK</title>
    <meta name="description" content="Un site concours, tentez de gagner un voyage grace à une production audiovisuelle ! Defi Hawk">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="images/favicon.ico">
    <script src="java/planche.js"></script>
    <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>
    <script src="java/modif.js"></script>
    <script src="java/lot.js"></script>
</head>

<body>
    <main id="main404">
        <img src="./images/imgLogoOmbre.png" alt="logo de Defi Hawk" id="logo404">
        <div id="retourPageAccueil404">
            <a href="./index.php">Retournez à la <br> page d'accueil</a>
            <a href="./index.php"><img src="./css/images/imgFleche404.png" alt="Fleche illustrative"></a>
        </div>
        <div id="divTexte404">
            <h1 id="h1404">Erreur 404</h1>
            <p id="p404">la page demandée n'existe pas ou n'a pas pu être trouvée. Defi hawk s'excuse de ce désagrement.</p>
        </div>
        <h2 id="h2404">OUPS !</h2>
        <img src="./images/imgMascotte404.png" alt="Macotte désolée" id="mascotte404">

    </main>
</body>

</html>
